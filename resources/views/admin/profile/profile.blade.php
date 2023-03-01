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
        <div class="">
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
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <form id="formAccountSettings" name="formAccountSettings">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input class="form-control" value="{{ explode(' ', $user_details->name)[0] }}"
                                        type="text" id="firstName" name="firstName" value="John" autofocus />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input class="form-control" type="text"
                                        value="{{ explode(' ', $user_details->name)[1] }}" name="lastName" id="lastName"
                                        value="Doe" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ $user_details->email }}" placeholder="john.doe@example.com" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" class="form-control" id="organization" name="organization"
                                        value="{{ $user_details->business_name }}" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">IN (+91)</span>
                                        <input type="text" id="phoneNumber" value="{{ $user_details->number }}"
                                            name="phoneNumber" class="form-control" placeholder="202 555 0111" />
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" value="{{ $user_details->address }}"
                                        id="address" name="address" placeholder="Address" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">Country</label>
                                    <input class="form-control" type="text" readonly value="{{ $user_details->country }}"
                                        id="state" name="country" placeholder="California" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">State</label>
                                    <input class="form-control" type="text" value="{{ $user_details->state }}"
                                        id="state" name="state" placeholder="California" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="state" class="form-label">City</label>
                                    <input class="form-control" type="text" value="{{ $user_details->city }}"
                                        id="city" name="city" placeholder="Chicago" />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="zipCode" class="form-label">Zip Code</label>
                                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                                        placeholder="231465" maxlength="6" value="{{ $user_details->zip }}" />
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
                                <button type="button" class="btn btn-primary me-2" onclick="submitProfileForm()">Save
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
                                <p class="mb-0">Once you delete your account, there is no going back. Please be
                                    certain.</p>
                            </div>
                        </div>
                        <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
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
            <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
                <p>
                    Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                    cupcake gummi bears cake chocolate.
                </p>
                <p class="mb-0">
                    Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                    roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                    jelly-o tart brownie jelly.
                </p>
            </div>
        </div>
    </div>
    <script>
        const changeAvatar = (element) => {

        }
        const submitProfileForm = () => {
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
    </script>
@endsection
