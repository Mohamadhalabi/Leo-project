@extends('backend.layout.app')
@section('content')
    <div class="col">
            {{ Form::model($product, array('method' => 'PUT', 'class'=>'form card-body' , 'route' => array('backend.setting.payment-methods.update', $product->id))) }}
            @csrf
            <div class="card flex-row-fluid mb-2  ">
                <div class="card-header">
                    <h3 class="card-title"> Create new payment method</h3>
                    <div class="card-toolbar">
                        <a href="{{route('backend.currencies.index')}}" class="btn btn-info"><i
                                    class="las la-redo fs-4 me-2"></i> {{trans('backend.global.back')}}</a>
                    </div>
                </div>
                <div class="card card-flush">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                            @foreach(get_languages() as $key => $item)
                                <li class="nav-item">
                                    <a class="nav-link  {{$key == 0 ? "active" : ""}}" data-bs-toggle="tab"
                                    href="#lang_{{$item->code}}">{{$item->language}}</a>
                                </li>
                            @endforeach

                        </ul>
                        <div class="tab-content" id="information_tabs">
                        @foreach(get_languages() as $key => $item)
                <div class="tab-pane fade show  {{$key == 0 ? "active" : ""}}"
                     id="lang_{{$item->code}}" role="tabpane{{$key}}">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="form-group">
                                <label for="title_{{$item->code}}"
                                       class="form-label @if($key == 0 ) required @endif">{{trans('backend.product.title')}}</label>
                                <input type="text" class="form-control has-error" name="title_{{$item->code}}"
                                       value="{{old('title_'.$item->code , $product->getTranslation('name' , $item->code))}}"
                                       id="title_{{$item->code}}" maxlength="70">
                                <b id="error_title_{{$item->code}}" class="text-danger"></b>
                            </div>
                        </div>

                        <div class="col-12 col-md-12">
                        <div class="col-12 col-md-12 form-group ">
                            <div class="form-group">
                                <label class="form-label  @if($key == 0 ) required @endif"
                                       for="description_{{$item->code}}"> {{trans('backend.category.description')}}</label>
                                <textarea type="text" class="form-control" id="description_{{$item->code}}"
                                          name="description_{{$item->code}}"
                                > {{old('description_'.$item->code , $product->getTranslation('description' , $item->code))}}</textarea>
                                <b class="text-danger" id="error_description_{{$item->code}}">
                                    @error('description_'.$item->code)<i
                                        class="las la-exclamation-triangle"></i> {{$message}} @enderror</b>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            @endforeach
             <h2><label for="image" class="required mt-10">{{trans('backend.product.image')}}</label></h2>
             <div class="card-body pt-0">
            {!! single_image('image' , media_file(old('image',$product->icon) ), old('image',$product->icon), 'image',['watermark'=>'no' ]) !!}
            <br>
            <b class="text-danger" id="error_image">    @error('image'){{ $message }}@enderror</b>
            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card flex-row-fluid mb-2  ">
                <div class="card-body">
                    <div class="col  align-items-center">
                        <div class="form-group  align-items-center">
                            <br>
                            <div class="form-check form-switch form-check-custom form-check-solid me-10">
                                <input class="form-check-input h-20px w-30px" checked type="checkbox" value="1"
                                       name="status" id="status"/>
                                <label class="form-check-label" for="status">
                                    Active
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">  {{trans('backend.global.save')}} </button>
                </div>
            </div>
        </form>
    </div>
@endsection
