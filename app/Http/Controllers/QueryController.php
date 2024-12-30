<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ManagementQuery;

class QueryController extends Controller
{
    // Show all student queries
    public function studentQueries()
    {
        $queries = Contact::all();
        return view('adminPanel.queries.students', compact('queries'));
    }

    // Show all management queries
    public function managementQueries()
    {
        $queries = ManagementQuery::all();
        return view('adminPanel.queries.management', compact('queries'));
    }
}
