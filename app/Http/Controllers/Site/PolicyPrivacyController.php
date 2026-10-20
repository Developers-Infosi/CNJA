<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class PolicyPrivacyController extends Controller
{
   public function index()
   {
      return view('site.policyPrivacy.index');
   }
}
