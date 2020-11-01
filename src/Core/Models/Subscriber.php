<?php

namespace AkshayJumbade\Subscriber\Core\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
   use HasFactory;

   protected $fillable = [
      'email',
      'name',
      'channel',
      'topic',
      'list',
   ];

}
