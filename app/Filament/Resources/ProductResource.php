<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),

            TextInput::make('name')
                ->required(),

            TextInput::make('slug')
                ->required(),

            TextInput::make('price')
                ->numeric(),

            Textarea::make('description'),

            FileUpload::make('images')
                ->multiple()
                ->image()
                ->directory('products')
                ->reorderable()
                ->maxFiles(10),

            Toggle::make('is_active')
                ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')
                ->label('Product')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('category.name')
                ->label('Category')
                ->sortable(),

            Tables\Columns\TextColumn::make('price')
                ->label('Price')
                ->money('INR'),

            Tables\Columns\ToggleColumn::make('is_active')
                ->label('Active'),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Created')
                ->date('d M Y'),
        ])
        ->defaultSort('created_at', 'desc')
        ->actions([
            Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
