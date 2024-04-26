<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Mansoor\FilamentVersionable\RevisionsPage;

class ContactRevisions extends RevisionsPage
{
    protected static string $resource = ContactResource::class;
}
