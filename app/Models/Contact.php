<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelVersionable\Versionable;
use Overtrue\LaravelVersionable\VersionStrategy;

class Contact extends Model
{
    use HasFactory, Versionable;

    protected $fillable = ['name'];

    protected $versionable = ['name'];
 
    protected $versionStrategy = VersionStrategy::SNAPSHOT;
}
