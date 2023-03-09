@extends('layouts.catering')

@section('container')
    <div class="row p-4">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap align-items-center justify-content-between">
                    <div class="left">
                        <h6 class="text-medium mb-30">Status Catering Terbaru</h6>
                    </div>
                    <div class="right">
                        <div class="select-style-1">
                            <div class="select-position select-sm">
                                <select class="light-bg">
                                    <option value="">Today</option>
                                    <option value="">Yesterday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table top-selling-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6 class="text-sm text-medium">Nama Paket</h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Harga
                                    </h6>
                                </th>
                                <th class="min-width">
                                    <h6 class="text-sm text-medium">
                                        Menu
                                    </h6>
                                </th>
                                <th>
                                    <h6 class="text-sm text-medium text-end">
                                        Actions
                                    </h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>
                                        <div class="product">
                                            <div class="image">
                                                <img src="" alt="" />
                                            </div>
                                            <p class="text-sm">
                                                {{ $item->menu->nama }}
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm">XII RPL</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-end">
                                            <button class="edit">
                                                <i class="lni lni-pencil"></i>
                                            </button>
                                            <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Remove</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
@endsection
