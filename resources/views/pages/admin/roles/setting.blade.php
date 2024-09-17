@extends('layouts.app')

@section('title', 'Roles')
@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Roles</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">All Roles</div>
                </div>
            </div>
            <div class="section-body">
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 mt-2 font-weight-bold text-primary">Setup Roles</h6>
                            <div class="float-right d-inline">
                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[0]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            General Settings
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[1]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Page Settings
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[2]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Footer Columns
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[3]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Sliders
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[4]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Blog Section
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[5]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Dynamic Pages
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[6]" value="1">
                                        </td>
                                        <td>

                                            Admin User Section
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[7]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Menu Manage
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[8]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Project
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[9]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Career Section
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[10]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Photo Gallery
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[11]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Video Gallery
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[12]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Product Section
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[13]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Order Section
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[14]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Customer Section
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[15]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Why Choose Us
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[16]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Service
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[17]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Testimonial
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[18]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Team Member
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[19]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            FAQ
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[20]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Email Template
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[21]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Subscriber Section
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[22]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Social Media
                                        </td>
                                    </tr>


                                    <tr>
                                        <td class="w_50">
                                            <input type="checkbox" name="access_status_arr[23]" value="1"
                                                checked="">
                                        </td>
                                        <td>

                                            Translation Section
                                        </td>
                                    </tr>


                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
