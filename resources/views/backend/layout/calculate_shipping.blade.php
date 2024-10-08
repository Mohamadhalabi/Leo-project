<div class="app-navbar-item ms-1 ms-lg-3">
    <!--begin::Menu wrapper-->

    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
         data-kt-menu="true">
        <div class="d-flex flex-column bgi-no-repeat pt-2 rounded-top bg-dark">
            <!--begin::Title-->
            {{--                                    <h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications--}}
            {{--                                        <span class="fs-8 opacity-75 ps-3">24 reports</span></h3>--}}
            <!--end::Title-->
            <!--begin::Tabs-->
            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9"
                role="tablist">

                <li class="nav-item" role="presentation">
                    <a class="nav-link text-white text-md opacity-75 opacity-state-100 pb-4 active"
                       data-bs-toggle="tab" href="#kt_topbar_notifications_2"
                       aria-selected="true"
                       role="tab">{{trans('seller.calculate_shipping_cost')}}</a>
                </li>

            </ul>
            <!--end::Tabs-->
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                <div class="scroll-y mh-325px my-5 px-8 ">

                    <div class="col form-group">
                        <label for="shipping-country"
                               class="col-form-label form-label">{{trans('seller.product.countries')}}</label>
                        <select class="form-control form-control-sm" name="shipping-country"
                                data-control="select2" id="shipping-country">
                            <option value="{{null}}">{{__('backend.global.select_an_option')}}</option>
                            @foreach(get_countries() as $key => $country)
                                <option value="{{$key}}">{{$country}}</option>
                            @endforeach
                        </select>
                        <b class="text-danger" id="shipping-country-error"> </b>
                    </div>
                    <div class="col form-group mt-2 " id="display-quantity">
                        <label for="shipping-weight"
                               class="col-form-label form-label">{{trans('seller.product.weight')}}
                            (KG)</label>
                        <input type="number" step="0.00001" name="shipping-weight" id="shipping-weight"
                               class="form-control form-control-sm">
                        <b class="text-danger" id="shipping-weight-error"> </b>
                    </div>
                    <div class="col form-group mt-2 " id="display-shipping">
                        <table id="display-shipping-table" style="width: 100%;">

                        </table>
                    </div>
                    <button class="btn btn-primary mt-2 "
                            id="get-shipping-price">{{trans('seller.get_shipping_price')}}</button>

                </div>
            </div>

        </div>
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>
