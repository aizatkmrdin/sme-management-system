@extends('layouts.app')

@section('content')
    {{-- Toolbar --}}
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->

                <!--end::Description--></h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <!--end::Filter menu-->
                <!--begin::Secondary button-->
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="{{ route('brand.create') }}" class="btn btn-sm btn-primary"
                    data-bs-target="#kt_modal_create_app">Create</a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    {{-- Container --}}
    <div class="row gy-5 g-xl-10">

        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-12 mb-5 mb-xl-10 px-12">
            @if (session()->get('success'))
                <div class="alert alert-success alert-with-border">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->get('error'))
                <div class="alert alert-danger alert-with-border">
                    {{ session()->get('error') }}
                </div>
            @endif
            <!--begin::Table Widget 4-->
            <div class="card card-flush h-xl-100">
                <!--begin::Card header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">

                        <span class="card-label fw-bolder text-dark">Existing Brands</span>
                        <span class="text-gray-400 mt-1 fw-bold fs-6">{{ $brands->count() }}
                            {{ $brands->count() > 1 ? ' Items' : 'Item' }} </span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Actions-->
                    <div class="card-toolbar">
                        <!--begin::Filters-->
                        <div class="d-flex flex-stack flex-wrap gap-4">
                            <!--begin::Destination-->
                            <!--end::Status-->
                            <!--begin::Search-->
                            <div class="position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-table-widget-4="search"
                                    class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Filters-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->

                <div class="card-body">
                    <!--begin::Table-->
                    {{-- id="kt_table_widget_4_table" --}}
                    <table class="table align-middle table-row-dashed fs-6 gy-3">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-10px">No.</th>
                                <th class="min-w-100px">Brand</th>
                                <th class="text-end">Action</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bolder text-gray-600">
                            <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                <td colspan="2">
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                            <img src="" data-kt-src-path="assets/media/stock/ecommerce/"
                                                alt="" data-kt-table-widget-4="template_image" />
                                        </a>
                                        <div class="d-flex flex-column text-muted">
                                            <a href="#" class="text-dark text-hover-primary fw-bolder"
                                                data-kt-table-widget-4="template_name">Product name</a>
                                            <div class="fs-7" data-kt-table-widget-4="template_description">Product
                                                description</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="text-dark fs-7">Cost</div>
                                    <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_cost">1</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-dark fs-7">Qty</div>
                                    <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_qty">1</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-dark fs-7">Total</div>
                                    <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_total">name
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="text-dark fs-7 me-3">On hand</div>
                                    <div class="text-muted fs-7 fw-bolder" data-kt-table-widget-4="template_stock">32
                                    </div>
                                </td>
                                <td></td>
                            </tr>

                            @foreach ($brands as $key => $brand)
                                <tr>
                                    <td>
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                                            class="text-dark text-hover-primary">{{ $key + 1 }}</a>
                                    </td>
                                    <td class="text-start">{{ $brand->name }}</td>

                                    <td>
                                        <div class="d-flex justify-content-end flex-shrink-0">
                                            <a href="{{ route('brand.destroy', $brand) }}"
                                                class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                            fill="black" />
                                                        <path opacity="0.5"
                                                            d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                            fill="black" />
                                                        <path opacity="0.5"
                                                            d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Table Widget 4-->
        </div>
        <!--end::Col-->
    </div>
@endsection
