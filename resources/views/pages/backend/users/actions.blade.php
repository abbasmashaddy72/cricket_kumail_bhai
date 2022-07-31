<div class="flex justify-around space-x-1">
    @can('user_view')
        <a href="{{ route('admin.user.show', [$id]) }}" class="p-1 text-teal-600 rounded hover:bg-teal-600 hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                <path fill-rule="evenodd"
                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    @endcan

    @can('user_edit')
        <a href="{{ route('admin.user.edit', [$id]) }}"
            class="p-1 text-blue-600 rounded hover:bg-blue-600 hover:text-white">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                </path>
            </svg>
        </a>
    @endcan

    @can('user_permissions_edit')
        <a href="{{ route('admin.user.permissions.edit', [$id]) }}"
            class="p-1 text-blue-600 rounded hover:bg-blue-600 hover:text-white">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="1246.000000pt" height="1280.000000pt"
                viewBox="0 0 1246 1280">
                <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                    <path
                        d="M0 12182 c0 -781 15 -1258 56 -1832 237 -3332 1244 -6067 2964 -8050 259 -298 527 -569 840 -851 696 -625 1573 -1176 2228 -1400 l142 -48 143 48 c477 163 1096 512 1662 939 1345 1012 2433 2440 3182 4177 652 1511 1050 3251 1187 5185 42 584 58 1156 54 1892 l-3 556 -350 -155 c-521 -230 -724 -316 -993 -420 -905 -349 -1637 -543 -2047 -543 -500 0 -1561 315 -2617 777 l-218 95 -187 -82 c-401 -176 -810 -333 -1223 -471 -769 -256 -1259 -350 -1610 -310 -322 37 -720 137 -1241 311 -485 162 -822 294 -1424 560 -214 95 -425 187 -467 206 l-78 33 0 -617z m6367 -913 c1241 -497 2207 -744 2793 -715 356 18 764 97 1280 249 173 51 638 205 798 265 l83 31 -6 -122 c-49 -950 -127 -1663 -266 -2435 -445 -2467 -1420 -4493 -2854 -5927 -572 -572 -1182 -1023 -1802 -1334 l-161 -81 -69 32 c-206 96 -497 263 -733 421 -1413 944 -2553 2426 -3285 4272 -466 1173 -773 2493 -919 3945 -37 360 -52 570 -82 1112 l-6 117 84 -31 c156 -59 623 -214 798 -265 305 -90 618 -165 825 -198 55 -8 127 -20 160 -25 33 -5 133 -15 223 -22 373 -27 830 42 1469 223 350 99 973 317 1383 483 74 30 141 55 147 56 7 0 70 -23 140 -51z" />
                </g>
            </svg>
        </a>
    @endcan

    @can('user_delete')
        @include('datatables::delete', ['value' => $id])
    @endcan
</div>
