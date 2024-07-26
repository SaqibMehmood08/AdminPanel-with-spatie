@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-title pb-2 mb-5" style="border-bottom: 1px solid lightgrey">
            <div class="row">
                <div class="col-6">
                    <h4>Add Outlet</h4>
                </div>
                <div class="col-6 text-end">
                    <button class="btn btn-table rounded-5"><i class="fa-solid fa-chevron-left"></i> Back</button>
                </div>
            </div>
        </div>
    </div>

    <form class="form theme-form dark-inputs">
        <div class="container-fluid">
            <div class="row px-5">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Name <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword6">Food Point Slugan Text</label>
                                    <input class="form-control btn-pill" id="exampleInputPassword6" type="text"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Url</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword6">URL Slug</label>
                                    <input class="form-control btn-pill" id="exampleInputPassword6" type="text"
                                        placeholder="">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect7">Menu Categories <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select btn-pill digits" id="exampleFormControlSelect7" required
                                        style="border: 1px solid lightgray">
                                        <option>Tivo</option>
                                        <option>Riho</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect7">Restaurant Types <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select btn-pill digits" id="exampleFormControlSelect7" required
                                        style="border: 1px solid lightgray;">
                                        <option>Tivo</option>
                                        <option>Riho</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Disount(%)</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="" value="0">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Phone</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Email</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="email"
                                        placeholder="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Latitude</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Longitude</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Orgaination No.</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect7">Country <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select btn-pill digits" id="exampleFormControlSelect7" required
                                        style="border: 1px solid lightgray;">
                                        <option>Tivo</option>
                                        <option>Riho</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">State</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Post Code</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Address</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Google Map</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Fax</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput5">Web Title</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Meta Description</label>
                                    <textarea class="form-control btn-pill" id="exampleFormControlTextarea9" rows="3"
                                        style="border: 1px solid lightgray;"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">About Us</label>
                                    <textarea class="form-control btn-pill" id="exampleFormControlTextarea9" rows="3"
                                        style="border: 1px solid lightgray;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect7">Dietary <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select btn-pill digits" id="exampleFormControlSelect7" required
                                        style="border: 1px solid lightgray;">
                                        <option>Tivo</option>
                                        <option>Riho</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect7">Services <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select btn-pill digits" id="exampleFormControlSelect7" required
                                        style="border: 1px solid lightgray;">
                                        <option>Tivo</option>
                                        <option>Riho</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label lable-img" for="image-upload-1">Logo (front)</label>
                                </div>
                                <div class="image-upload" id="image-upload-1">
                                    <label for="file-input-1">
                                        <div class="image-box" id="image-box-1">
                                            <img src="" alt="Uploaded Image" id="uploaded-image-1" />
                                            <span id="placeholder-text-1">no image</span>
                                        </div>
                                    </label>
                                    <input id="file-input-1" type="file" onchange="loadFile(event, 1)" />
                                    <div class="button-upload" id="buttons-1" style="display: none;">
                                        <button id="change-button-1">Change</button>
                                        <button id="remove-button-1">Remove</button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label lable-img" for="image-upload-2">Fav Icon</label>
                                </div>
                                <div class="image-upload" id="image-upload-2">
                                    <label for="file-input-2">
                                        <div class="image-box" id="image-box-2">
                                            <img src="" alt="Uploaded Image" id="uploaded-image-2" />
                                            <span id="placeholder-text-2">no image</span>
                                        </div>
                                    </label>
                                    <input id="file-input-2" type="file" onchange="loadFile(event, 2)" />
                                    <div class="button-upload" id="buttons-2" style="display: none;">
                                        <button id="change-button-2">Change</button>
                                        <button id="remove-button-2">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label lable-img" for="image-upload-3">Logo (Admin)</label>
                                </div>
                                <div class="image-upload" id="image-upload-3">
                                    <label for="file-input-3">
                                        <div class="image-box" id="image-box-3">
                                            <img src="" alt="Uploaded Image" id="uploaded-image-3" />
                                            <span id="placeholder-text-3">no image</span>
                                        </div>
                                    </label>
                                    <input id="file-input-3" type="file" onchange="loadFile(event, 3)" />
                                    <div class="button-upload" id="buttons-3" style="display: none;">
                                        <button id="change-button-3">Change</button>
                                        <button id="remove-button-3">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label lable-img" for="image-upload-4">Small Logo (Admin)</label>
                                </div>
                                <div class="image-upload" id="image-upload-4">
                                    <label for="file-input-4">
                                        <div class="image-box" id="image-box-4">
                                            <img src="" alt="Uploaded Image" id="uploaded-image-4" />
                                            <span id="placeholder-text-4">no image</span>
                                        </div>
                                    </label>
                                    <input id="file-input-4" type="file" onchange="loadFile(event, 4)" />
                                    <div class="button-upload" id="buttons-4" style="display: none;">
                                        <button id="change-button-4">Change</button>
                                        <button id="remove-button-4">Remove</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                    <label class="form-label lable-img" for="image-upload-5">Cover Image</label>
                                </div>
                                <div class="image-upload" id="image-upload-5">
                                    <label for="file-input-5">
                                        <div class="image-box" id="image-box-5">
                                            <img src="" alt="Uploaded Image" id="uploaded-image-5" />
                                            <span id="placeholder-text-5">no image</span>
                                        </div>
                                    </label>
                                    <input id="file-input-5" type="file" onchange="loadFile(event, 5)" />
                                    <div class="button-upload" id="buttons-5" style="display: none;">
                                        <button id="change-button-5">Change</button>
                                        <button id="remove-button-5">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect7">Template <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select btn-pill digits" id="exampleFormControlSelect7" required
                                        style="border: 1px solid lightgray;">
                                        <option>Tivo</option>
                                        <option>Riho</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Facebook App ID:</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Merchant Live:</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Merchant Test:</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>
        <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid rgb(222, 220, 220)">
                <div class="col-6">
                    <h4>Social Media</h4>
                </div>
            </div>
            <div class="row px-5 pt-4">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Facebook</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Twitter</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Google Plus</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Instagram</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Google Play Link</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">iTunes Link</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid lightgrey">
                <div class="col-6">
                    <h4>SMTP Info</h4>
                </div>
            </div>
            <div class="row px-5 pt-4">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Username:</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Password:</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Host</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Port</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="row" style="border-bottom: 1px solid lightgrey">
                                <div class="col-6">
                                    <h4>Seo Info:</h4>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlTextarea9">Link <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                            placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlTextarea9">Meta Keyword <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                            placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlTextarea9">Meta Description <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                            placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlTextarea9">Meta Title <span
                                                class="text-danger">*</span></label>
                                        <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                            placeholder="" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="border-bottom: 1px solid lightgrey">
                <div class="col-6">
                    <h4>Google/Facebook insights js Code</h4>
                </div>
            </div>
            <div class="row px-5 pt-4">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Google Code:</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlTextarea9">Facebook Code:</label>
                                    <input class="form-control btn-pill" id="exampleFormControlInput5" type="text"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-start ps-4 ms-4">
                    <button class="btn btn-primary me-3" type="submit"><i class="fa-solid fa-check"></i> Submit</button>
                    <button class="btn btn-light text-dark"><i class="fa-solid fa-rotate-left"></i> Cancel</button>
                </div>
            </div>
        </div>
    </form>
@endsection
