<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard');
    }

    public function datatable(): View
    {
        return view('admin.pages.table-datatable');
    }

    public function products(): View
    {
        return view('admin.pages.ecommerce-products-grid');
    }

    public function charts(): View
    {
        return view('admin.pages.charts-apex-chart');
    }

    public function page(string $page): View
    {
        if (in_array($page, ['index', 'dashboard'], true)) {
            return $this->index();
        }

        abort_unless(view()->exists('admin.pages.'.$page), 404);

        return view('admin.pages.'.$page);
    }
}
