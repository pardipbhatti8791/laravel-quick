<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTimeEntryRequest;
use App\Http\Requests\StoreTimeEntryRequest;
use App\Http\Requests\UpdateTimeEntryRequest;
use App\TimeEntry;
use App\TimeProject;
use App\TimeWorkType;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TimeEntryController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('time_entry_access'), 403);

        $timeEntries = TimeEntry::all();

        return view('admin.timeEntries.index', compact('timeEntries'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('time_entry_create'), 403);

        $work_types = TimeWorkType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projects = TimeProject::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.timeEntries.create', compact('work_types', 'projects'));
    }

    public function store(StoreTimeEntryRequest $request)
    {
        abort_unless(\Gate::allows('time_entry_create'), 403);

        $timeEntry = TimeEntry::create($request->all());

        return redirect()->route('admin.time-entries.index');
    }

    public function edit(TimeEntry $timeEntry)
    {
        abort_unless(\Gate::allows('time_entry_edit'), 403);

        $work_types = TimeWorkType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $projects = TimeProject::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $timeEntry->load('work_type', 'project');

        return view('admin.timeEntries.edit', compact('work_types', 'projects', 'timeEntry'));
    }

    public function update(UpdateTimeEntryRequest $request, TimeEntry $timeEntry)
    {
        abort_unless(\Gate::allows('time_entry_edit'), 403);

        $timeEntry->update($request->all());

        return redirect()->route('admin.time-entries.index');
    }

    public function show(TimeEntry $timeEntry)
    {
        abort_unless(\Gate::allows('time_entry_show'), 403);

        $timeEntry->load('work_type', 'project');

        return view('admin.timeEntries.show', compact('timeEntry'));
    }

    public function destroy(TimeEntry $timeEntry)
    {
        abort_unless(\Gate::allows('time_entry_delete'), 403);

        $timeEntry->delete();

        return back();
    }

    public function massDestroy(MassDestroyTimeEntryRequest $request)
    {
        TimeEntry::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
