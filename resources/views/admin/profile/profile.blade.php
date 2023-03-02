@extends('layouts.admin-layout')

@section('content')
    <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3 nav-fill" role="tablist" style="width:20rem">
            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile"
                    aria-selected="false">
                    <i class="tf-icons bx bx-user"></i> Profile
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages"
                    aria-selected="false">
                    <i class="tf-icons bx bx-link-alt"></i> Social Media
                </button>
            </li>
        </ul>
        <div class="tab-content" style="background-color: transparent;box-shadow: 0 0 0 0; border:0;">
            <div class="row tab-pane fade active show" id="navs-pills-justified-profile" role="tabpanel">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ $user_details->avatar != '' || $user_details->avatar != null ? '/document_bucket/' . $user_details->avatar : '/assets/img/avatars/notfoundimag.jpg' }}"
                                alt="user-avatar" class="d-block rounded" height="100" width="100"
                                id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" name="image" form="formAccountSettings"
                                        class="account-file-input" onchange="changeAvatar(this)" hidden
                                        accept="image/png, image/jpeg" />
                                </label>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 2M</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" name="formAccountSettings" onsubmit="submitProfileForm(event)">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name <span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input class="form-control" value="{{ explode(' ', $user_details->name)[0] }}"
                                        type="text" id="firstName" required name="firstName" value="John" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input class="form-control" type="text"
                                        value="{{ explode(' ', $user_details->name)[1] }}" required name="lastName"
                                        id="lastName" value="Doe" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ $user_details->email }}" required placeholder="john.doe@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Organization<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input type="text" class="form-control" required id="organization"
                                        name="organization" value="{{ $user_details->business_name }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">IN (+91)</span>
                                        <input type="text" id="phoneNumber" value="{{ $user_details->number }}"
                                            name="phoneNumber" required class="form-control"
                                            placeholder="202 555 0111" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input type="text" class="form-control" value="{{ $user_details->address }}"
                                        id="address" name="address" required placeholder="Address" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">Country<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input class="form-control" type="text" readonly
                                        value="{{ $user_details->country }}" required id="state" name="country"
                                        placeholder="California" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input class="form-control" type="text" value="{{ $user_details->state }}"
                                        id="state" name="state" required placeholder="California" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">City<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input class="form-control" type="text" value="{{ $user_details->city }}"
                                        id="city" name="city" required placeholder="Chicago" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="zipCode" class="form-label">Zip Code<span class="text-danger"
                                            style="font-size:15px">*</span></label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                                        placeholder="231465" required maxlength="6" value="{{ $user_details->zip }}" />
                                </div>
                                {{-- <div class="mb-3 col-md-6">
                                        <label for="currency" class="form-label">Currency</label>
                                        <select id="currency" class="select2 form-select">
                                            <option value="">Select Currency</option>
                                            <option value="usd">USD</option>
                                            <option value="euro">Euro</option>
                                            <option value="pound">Pound</option>
                                            <option value="bitcoin">Bitcoin</option>
                                        </select>
                                    </div> --}}
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Save
                                    changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Reset All</button>
                            </div>
                        </form>
                    </div>
                    <!-- /Account -->
                </div>
                <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                        <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?
                                </h6>
                                <p class="mb-0">Once you delete your account, there is no going back. All your published
                                    ads will be removed, Please be
                                    certain. </p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="submitformAccountDeactivation(event)">
                            <div class="form-check mb-3">
                                <input class="form-check-input" required type="checkbox" name="accountActivation"
                                    id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">I confirm my account
                                    deactivation</label>
                            </div>
                            <button type="submit" class="btn btn-danger deactivate-account">Deactivate
                                Account</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" row tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
                <div class="row">
                    <div class="card">
                        <h5 class="card-header">Social Accounts</h5>
                        <div class="card-body">
                            <p>Show social media links on your ads</p>
                            <!-- Social Accounts -->
                            <form id="linksForm" name="linksForm" onsubmit="linkFormSubmit(event)">
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/brands/facebook.png') }}" alt="facebook"
                                            class="me-3" height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-12 col-sm-12 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Facebook</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>

                                        <div class="col-12 col-sm-12 text-end">
                                            <input type="text" class="form-control" placeholder="https://www.facebook.com/"
                                                value="{{ !empty($social_media) ? $social_media->facebook : '' }}"
                                                name="facebook">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/brands/twitter.png') }}" alt="twitter"
                                            class="me-3" height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-12 col-sm-12 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Twitter</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>

                                        <div class="col-12 col-sm-12 text-end">
                                            <input type="text" class="form-control" placeholder="https://twitter.com/"
                                                value="{{ !empty($social_media) ? $social_media->twitter : '' }}"
                                                name="twitter">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/img/icons/brands/instagram.png') }}" alt="instagram"
                                            class="me-3" height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-12 col-sm-12 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Instagram</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>

                                        <div class="col-12 col-sm-12 text-end">
                                            <input type="text" class="form-control" placeholder="https://www.instagram.com/"
                                                value="{{ !empty($social_media) ? $social_media->instagram : '' }}"
                                                name="instagram">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="../assets/img/icons/brands/linkedin.png" alt="linkedin" class="me-3"
                                            height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-12 col-sm-12 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Linkedin</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>

                                        <div class="col-12 col-sm-12 text-end">
                                            <input type="text" class="form-control"
                                                value="{{ !empty($social_media) ? $social_media->linkedin : '' }}"
                                                name="linkedin" placeholder="https://in.linkedin.com/">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="../assets/img/icons/brands/whatsapp.png" alt="whatsapp" class="me-3"
                                            height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-12 col-sm-12 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Whatsapp</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>

                                        <div class="col-12 col-sm-12 text-end">
                                            <div class="input-group input-group-merge"><span class="input-group-text">IN
                                                    (+91)</span><input type="text" id="whatsapp" name="whatsapp"
                                                    value="{{ !empty($social_media) ? $social_media->whatsapp : '' }}"
                                                    class="form-control" placeholder="202 555 0111"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="../assets/img/icons/brands/youtube.png" alt="youtube" class="me-3"
                                            height="30" />
                                    </div>
                                    <div class="flex-grow-1 row">
                                        <div class="col-12 col-sm-12 mb-sm-0 mb-2">
                                            <h6 class="mb-0">Youtube</h6>
                                            <small class="text-muted">Not Connected</small>
                                        </div>

                                        <div class="col-12 col-sm-12 text-end">
                                            <input type="text" class="form-control" placeholder="https://www.youtube.com/"
                                                value="{{ !empty($social_media) ? $social_media->youtube : '' }}"
                                                name="youtube">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /Social Accounts -->

                            <div class="text-center">
                                <button class="btn btn-primary" form="linksForm" type="submit">Save Links</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const linkFormSubmit = (e) => {
            e.preventDefault();
            holdOn('Saving Social Media Links... Please Wait')
            let formData = new FormData($('#linksForm')[0])
            axios({
                    method: 'post',
                    url: '/admin/profile/save-social-links',
                    headers: {
                        "Content-Type": "multipart/form-data"
                    },
                    data: formData
                })

                .then(response => {
                    closeHoldOn();
                    if (!response.data.status) {
                        showToast('Error !!!', response.data.message, 'error', true, 'red');
                        return false;
                    }
                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                })

                .catch(error => console.log(error));
        }
        const changeAvatar = (element) => {

        }
        const submitProfileForm = (e) => {
            e.preventDefault();
            let formData = new FormData($('#formAccountSettings')[0]);
            holdOn('Updating user profile...Please Wait !!!');
            axios({
                    method: 'post',
                    url: '/admin/profile/save-profile',
                    data: formData,
                    headers: {
                        "Content-Type": "multipart/form-data"
                    },
                })

                .then(response => {
                    closeHoldOn();
                    if (!response.data.status) {
                        showToast('Error !!!', response.data.message, 'error', true, 'red');
                        return false;
                    }
                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
                })

                .catch(error => console.log(error));
        }

        const submitformAccountDeactivation = (e) => {
            e.preventDefault();
            holdOn('Desctivating Your Account...Please Wait');
            axios({
                    method: 'post',
                    url: '/admin/profile/deactivate-profile',
                })
                .then(response => {
                    if (!response.data.status) {
                        closeHoldOn();
                        showToast('Success', response.data.message, 'success', true, 'green');
                    } else {
                        window.location.href = '/login';
                    }
                    setTimeout(() => {
                        window.location.reload();
                    }, 3000);
                })
                .catch(error => console.log(error));
        }
    </script>
@endsection
