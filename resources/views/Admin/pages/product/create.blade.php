@extends('Admin.master')
@push('css')

@endpush
@section('content')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add New Product
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button type="button" class="btn box mr-2 flex items-center ml-auto sm:ml-0"> <i class="w-4 h-4 mr-2" data-feather="eye"></i> Preview </button>
            <div class="dropdown">
                <button class="dropdown-toggle btn btn-primary shadow-md flex items-center" aria-expanded="false" data-tw-toggle="dropdown"> Save <i class="w-4 h-4 ml-2" data-feather="chevron-down"></i> </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> As New Post </a>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> As Draft </a>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Word </a>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input type="text" class="intro-y form-control py-3 px-4 box pr-10" placeholder="Title">
            <div class="post intro-y overflow-hidden box mt-5">
                <div class="post__content tab-content">
                    <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                            <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Product Description </div>
                            <div class="mt-5">
                                <div class="editor">
{{--                                    <p>Write a brief Description about the product</p>--}}
                                </div>
                            </div>
                        </div>
                        <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5 mt-5">
                            <div class="font-medium flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Product Images </div>
                            <div class="mt-5">
                                <div class="mt-3">
                                    <label class="form-label">Upload Image</label>
                                    <div class="border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                        <div class="flex flex-wrap px-4">
                                            <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                <img class="rounded-md" alt="Tinker Tailwind HTML Admin Template" src="{{ asset('dist/images/preview-10.jpg') }}">
                                                <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                            </div>
                                            <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                <img class="rounded-md" alt="Tinker Tailwind HTML Admin Template" src="{{ asset('dist/images/preview-8.jpg') }}">
                                                <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                            </div>
                                            <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                <img class="rounded-md" alt="Tinker Tailwind HTML Admin Template" src="{{ asset('dist/images/preview-9.jpg') }}">
                                                <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                            </div>
                                            <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                <img class="rounded-md" alt="Tinker Tailwind HTML Admin Template" src="{{ asset('dist/images/preview-15.jpg') }}">
                                                <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                            </div>
                                        </div>
                                        <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                            <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop
                                            <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div>
                    <label class="form-label">Added By</label>
                    <div class="dropdown">
                        <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-darkmode-800 dark:border-darkmode-800 flex items-center justify-start" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                            <div class="w-6 h-6 image-fit mr-3">
                                <img class="rounded" alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                            </div>
                            <div class="truncate">Russell Crowe</div>
                            <i class="w-4 h-4 ml-auto" data-feather="chevron-down"></i>
                        </div>
                        <div class="dropdown-menu w-full">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Russell Crowe</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-3.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Al Pacino</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Sean Connery</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-15.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Brad Pitt</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="w-6 h-6 absolute image-fit mr-3">
                                            <img class="rounded" alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-1.jpg">
                                        </div>
                                        <div class="ml-8 pl-1">Johnny Depp</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="post-form-2" class="form-label">Post Date</label>
                    <input type="text" class="datepicker form-control" id="post-form-2" data-single-mode="true">
                </div>
                <div class="mt-3">
                    <label for="post-form-3" class="form-label">Categories</label>
                    <select data-placeholder="Select categories" class="tom-select w-full" id="post-form-3" multiple>
                        <option value="1" selected>Horror</option>
                        <option value="2">Sci-fi</option>
                        <option value="3" selected>Action</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Tags</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="post-form-4" multiple>
                        <option value="1" selected>Leonardo DiCaprio</option>
                        <option value="2">Johnny Deep</option>
                        <option value="3" selected>Robert Downey, Jr</option>
                        <option value="4">Samuel L. Jackson</option>
                        <option value="5">Morgan Freeman</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Size (OPTIONAL)</label>
                    <select data-placeholder="Add your product sizes" class="tom-select w-full" id="post-form-4" multiple>
                        <option value="1">S</option>
                        <option value="2">M</option>
                        <option value="3">X</option>
                        <option value="4">XL</option>
                        <option value="5">XXL</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Color (OPTIONAL)</label>
                    <select data-placeholder="Add your product colors" class="tom-select w-full" id="post-form-4" multiple>
                        <option value="1">red</option>
                        <option value="2">black</option>
                        <option value="3">blue</option>
                        <option value="4">white</option>
                        <option value="5">yellow</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Currency</label>
                    <select data-placeholder="Add your product price currency" class="tom-select w-full" id="post-form-4" multiple>
                        <option value="1">dollar</option>
                        <option value="2">taka</option>
                        <option value="3">euro</option>
                        <option value="4">peso</option>
                        <option value="5">rupi</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="post-form-2" data-single-mode="true">
                </div>
                <div class="mt-3">
                    <label for="post-form-4" class="form-label">Product Coupon (OPTIONAL)</label>
                    <input type="text" class="form-control" id="post-form-2" data-single-mode="true">
                </div>
                <div class="mt-3 hidden">
                    <label for="post-form-4" class="form-label">Percentage</label>
                    <input type="text" class="form-control" id="post-form-2" data-single-mode="true">
                </div>
                <div class="form-check form-switch flex flex-col items-start mt-3">
                    <label for="post-form-5" class="form-check-label ml-0 mb-2">Published</label>
                    <input id="post-form-5" class="form-check-input" type="checkbox">
                </div>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
@endsection
@push('js')
    <script src="{{ asset('dist/js/ckeditor-classic.js') }}"></script>
@endpush
