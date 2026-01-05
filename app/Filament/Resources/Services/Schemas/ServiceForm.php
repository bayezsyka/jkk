<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->label('Kode Layanan')
                    ->required()
                    ->maxLength(20)
                    ->unique(ignoreRecord: true)
                    ->placeholder('BS001 / SI001')
                    ->helperText('Kode unik untuk identifikasi layanan'),

                TextInput::make('title')
                    ->label('Judul Layanan')
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
                    ->helperText('URL-friendly version of the title'),

                Textarea::make('excerpt')
                    ->label('Deskripsi Singkat')
                    ->maxLength(300)
                    ->rows(3)
                    ->placeholder('Deskripsi singkat untuk ditampilkan di list/card (max 300 karakter)')
                    ->helperText('Digunakan untuk preview di halaman daftar layanan')
                    ->columnSpanFull(),

                RichEditor::make('content')
                    ->label('Deskripsi Lengkap')
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

                Repeater::make('licenses')
                    ->label('Lisensi & Sertifikasi')
                    ->schema([
                        TextInput::make('code')
                            ->label('Kode')
                            ->required()
                            ->placeholder('KBLI / LPJK Code'),
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->placeholder('Nama lisensi'),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(2)
                            ->placeholder('Deskripsi singkat (opsional)'),
                    ])
                    ->columns(3)
                    ->collapsible()
                    ->reorderable()
                    ->addActionLabel('Tambah Lisensi')
                    ->itemLabel(fn(array $state): ?string => $state['code'] ?? null)
                    ->defaultItems(0)
                    ->columnSpanFull(),

                TextInput::make('icon')
                    ->label('Icon')
                    ->placeholder('heroicon-o-cog-6-tooth')
                    ->helperText('Nama heroicon atau path ke file SVG'),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->imageEditor()
                    ->directory('services/thumbnails')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->helperText('Gambar cover layanan (max 2MB)')
                    ->columnSpan(2),

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
                    ->label('Layanan Unggulan')
                    ->helperText('Tampilkan di halaman utama')
                    ->default(false),

                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->minValue(0)
                    ->helperText('Semakin kecil semakin atas'),
            ])
            ->columns(4);
    }
}
