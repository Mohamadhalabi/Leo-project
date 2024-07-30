@if(permission_can('show attributes' ,'admin'))
    <div class="menu-item @if(request()->routeIs('backend.attributes.*')) here show @endif">
        <a class="menu-link" href="{{ route("backend.attributes.index") }}">
							<span class="menu-icon">
					<!--begin::Svg Icon | path: assets/media/icons/duotune/art/art002.svg-->
<span class="svg-icon svg-icon-muted svg-icon-hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="currentColor"/>
<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="currentColor"/>
</svg></span>
                                <!--end::Svg Icon-->

										</span>
            <span class="menu-title">
                    {{ trans('backend.menu.attributes') }}</span>
        </a>
    </div>

@endif
