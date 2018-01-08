<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
  // import notifiable trait so we can access the notify method in controller
  use Notifiable;

  protected $admin;
  protected $email;

    // pass both admin and email to constructor and uses the setting of admin class in config
    public function __construct() {
    $this->admin = config('admin.name');
    $this->email = config('admin.email');
  }

}
