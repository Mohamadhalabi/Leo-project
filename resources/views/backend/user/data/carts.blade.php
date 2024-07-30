
<div class="card   flex-row-fluid mb-2  ">
    <div class="card-header">
        <h3 class="card-title"> {{trans('backend.menu.carts')}}</h3>
        <div class="card-toolbar">
            {!! @$create_button !!}
        </div>
    </div>
    <!--begin::Card Body-->
    <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
        <div class="table-responsive">
            <table id="datatable" class="table table-rounded table-striped border gy-7 w-100 gs-7">
                <thead>
                <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                    <th>{{trans('backend.cart.cart_id')}}</th>
                    <th>{{trans('backend.cart.image')}}</th>
                    <th>{{trans('backend.cart.product')}}</th>
                    <th>{{trans('backend.cart.quantity')}}</th>
                    <th>{{trans('backend.cart.price')}}</th>
                    <th>{{trans('backend.cart.discount')}}</th>
                    <th>{{trans('backend.global.created_at')}}</th>
                    <th>{{trans('backend.global.actions')}}</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <!--end::Card Body-->
</div>

{!! datatable_script() !!}
{!! $datatable_script !!}
