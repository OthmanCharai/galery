<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageResource\Pages;
use App\Filament\Resources\ImageResource\RelationManagers;
use App\Models\Image;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;


class ImageResource extends Resource
{
    protected static ?string $model = Image::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $recordTitleAttribute = 'tags';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('camera_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('location')
                    ->required()
                    ->maxLength(65535),
                Forms\Components\Textarea::make('exif')
                    ->required()
                    ->maxLength(65535),

                Forms\Components\TextInput::make('lens_type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DateTimePicker::make('date')
                    ->required(),
                Forms\Components\TextInput::make('tags')
                    ->required(),
                SpatieMediaLibraryFileUpload::make('image')
                    ->multiple()
                    ->enableReordering(),
                Select::make('category_id')
                    ->relationship('category', 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('cover'),
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('location')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('exif')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('camera_type')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('lens_type')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('date')->sortable()->searchable()
                    ->dateTime(),
                Tables\Columns\TextColumn::make('tags')->sortable()->searchable(),
                Tables\Columns\BooleanColumn::make('approved')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('approved')
                    ->label('Approve')
                    ->icon('heroicon-o-check')
                    ->authorize('super_admin')
                    ->url(fn (Image $record): string => route('admin.image.approve', $record))
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImages::route('/'),
            'create' => Pages\CreateImage::route('/create'),
            'edit' => Pages\EditImage::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationBadge(): ?string
    {
        return (auth()->user()->hasRole('super_admin'))? Image::count():count(Image::where('user_id',auth()->user()->id)->get());

    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->user()->id);
    }





}
