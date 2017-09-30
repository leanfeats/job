<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Traits\CategoryTrait;
use App\Http\Controllers\Traits\JobTrait;
use App\Http\Controllers\Traits\LocationTrait;
use App\Http\Controllers\Traits\SkillTrait;
use App\Http\Controllers\Traits\UserTrait;

use App\User;

class ApiController extends Controller
{
	use CategoryTrait;
	use JobTrait;
	use LocationTrait;
	use SkillTrait;
	use UserTrait;
}
