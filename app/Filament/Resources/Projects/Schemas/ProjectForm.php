<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Proyek')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state)))
                    ->columnSpan(2),

                TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->helperText('URL-friendly version of the title')
                    ->columnSpan(2),

                TextInput::make('client')
                    ->label('Klien')
                    ->maxLength(255)
                    ->placeholder('Nama klien'),

                TextInput::make('location')
                    ->label('Lokasi')
                    ->maxLength(255)
                    ->placeholder('Lokasi proyek'),

                TextInput::make('year')
                    ->label('Tahun')
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(2100)
                    ->placeholder(date('Y')),

                RichEditor::make('description')
                    ->label('Deskripsi')
                    ->columnSpanFull()
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'bulletList',
                        'orderedList',
                        'h2',
                        'h3',
                        'link',
                    ]),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('projects/thumbnails')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->helperText('Gambar utama proyek (max 2MB)')
                    ->columnSpan(2),

                FileUpload::make('gallery')
                    ->label('Galeri')
                    ->multiple()
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('projects/gallery')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->maxFiles(10)
                    ->reorderable()
                    ->helperText('Gambar galeri proyek (max 10 gambar, masing-masing max 2MB)')
                    ->columnSpanFull(),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('draft')
                    ->required()
                    ->native(false),

                Toggle::make('is_featured')
                    ->label('Proyek Unggulan')
                    ->helperText('Tampilkan di halaman utama')
                    ->default(false),
            ])
            ->columns(4);
    }
}
