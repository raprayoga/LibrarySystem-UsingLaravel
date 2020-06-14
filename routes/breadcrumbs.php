<?php

// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

// Index
Breadcrumbs::for('admin.author.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
});

// tambah peulis
Breadcrumbs::for('admin.author.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Tambah Penulis', route('admin.author.create'));
});

// ubah peulis
Breadcrumbs::for('admin.author.edit', function ($trail, $author) { //passing $author karena di route aslinya melakukan passing $author
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Ubah Penulis', route('admin.author.edit', $author));
});