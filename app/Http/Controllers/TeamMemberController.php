<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    // Display list of team members
    public function index()
    {
        $teamMembers = TeamMember::all();
        return view('adminPanel.team_members.index', compact('teamMembers'));
    }

    // Show form to create a new team member
    public function create()
    {
        return view('adminPanel.team_members.create');
    }

    // Store a new team member
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_members', 'public');
        }

        TeamMember::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
        ]);

        return redirect()->route('team_members.index')->with('success', 'Team member added successfully!');
    }

    // Show form to edit a team member
    public function edit(TeamMember $teamMember)
    {
        return view('adminPanel.team_members.edit', compact('teamMember'));
    }

    // Update a team member
    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team_members', 'public');
            $teamMember->image = $imagePath;
        }

        $teamMember->update([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $teamMember->image,  // Update the image only if it was uploaded
        ]);

        return redirect()->route('team_members.index')->with('success', 'Team member updated successfully!');
    }

    // Delete a team member
    public function destroy(TeamMember $teamMember)
    {
        $teamMember->delete();
        return redirect()->route('team_members.index')->with('success', 'Team member deleted successfully!');
    }
}
