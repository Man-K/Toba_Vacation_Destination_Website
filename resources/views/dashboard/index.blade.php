<h1>Welcome,{{auth()->user()->name}}</h1>
@foreach($saran as $item)
                <div class="comment even thread-even depth-1 mx-3 mt-4" id="li-comment-{{$item->id}}">
                    <div id="comment-{{$item->id}}" class="comment-wrap clearfix" style="width:1000px;">
                        <div class="comment-meta">
                            <div class="comment-author vcard">
                                <span class="comment-avatar clearfix">
                                <img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
                            </div>
                        </div>
                        <div class="comment-content clearfix">
                            <div class="comment-author">
                            <strong><ins>{{ $item->email }}</ins></strong>
                                <p>{{$item->saran}}
                                    <small class="text-muted" title="Permalink to this comment"><br>
                                        {{$item->created_at->diffForHumans()}}
                                        @if (Auth::user()->id==$item->user_id)
                                        {{-- @else (Auth::user()->role=="staff") --}}
                                            <form class="mx-auto" onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('saran.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')   
                                            <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                            </form>
                                        {{-- @else
                                            @if(Auth::user()->role_id==1)
                                                <form class="mx-auto" onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('saran.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')   
                                                <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                                                </form>
                                            @endif --}}
                                        @endif
                                    </small>
                                </p>
                            </div>
                            
                        </div>
                        <div class="clear"></div>
                        {{-- <nav class="dataTable-pagination">{{ $item->links() }}</nav> --}}
                    </div>
                </div>
@endforeach
{{-- <div class="mt-12 col-span-10 col-start-2 row-start-5">
    <div class="flex flex-col items-start space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6">
    <img class="object-cover w-20 h-20 mt-3 mr-3 rounded-full" src="https://www.gravatar.com/avatar/0e7b6742f9d7e1a8a213d74b429b9e8f" alt="Eric L. Barnes">
        <div>
            <p class="font-display mb-2 text-2xl font-semibold text-black" itemprop="author">
            <a href="/@ericlbarnes" rel="author">Eric L. Barnes</a>
            </p>
                <div class="mb-4 prose prose-sm text-gray-400">
                <p>Eric is the creator of Laravel News and has been covering Laravel since 2012.</p>
                </div>
                    <div class="flex">
                        <a href="https://twitter.com/ericlbarnes" target="_blank" rel="noopener noreferrer">
                        <svg class="text-brand-500 h-4 mr-4 fill-current" width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M7.54752 19.5012C16.6042 19.5012 21.5578 11.9979 21.5578 5.49101C21.5578 5.27789 21.5578 5.06573 21.5434 4.85453C22.507 4.15748 23.3389 3.29441 24 2.30573C23.1014 2.70413 22.148 2.96528 21.1718 3.08045C22.1998 2.46514 22.9692 1.49723 23.3366 0.356928C22.3701 0.930536 21.3126 1.33475 20.2099 1.55213C19.4675 0.762706 18.4856 0.23997 17.4162 0.0648128C16.3468 -0.110344 15.2494 0.071843 14.294 0.583181C13.3385 1.09452 12.5782 1.9065 12.1307 2.89348C11.6833 3.88045 11.5735 4.98739 11.8186 6.04301C9.8609 5.94481 7.94576 5.43604 6.19745 4.54973C4.44915 3.66343 2.90676 2.41939 1.6704 0.898368C1.04073 1.98236 0.847872 3.2656 1.1311 4.48679C1.41433 5.70798 2.15234 6.77532 3.19488 7.47149C2.41123 7.44853 1.64465 7.23712 0.96 6.85517V6.91757C0.960311 8.05442 1.35385 9.15616 2.07387 10.0359C2.79389 10.9157 3.79606 11.5193 4.9104 11.7444C4.18548 11.9422 3.42487 11.9711 2.68704 11.8289C3.00181 12.8073 3.61443 13.6628 4.43924 14.2759C5.26405 14.889 6.25983 15.229 7.28736 15.2485C6.26644 16.0509 5.09731 16.6442 3.84687 16.9944C2.59643 17.3447 1.28921 17.4449 0 17.2894C2.25183 18.7344 4.87192 19.5009 7.54752 19.4974" fill="currentColor"></path> </svg>
                        </a>
                        <a href="https://github.com/ericbarnes" target="_blank" rel="noopener noreferrer">
                        <svg class="text-brand-500 h-4 mr-4 fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9269 3.94344C14.2115 2.73031 13.2411 1.76987 12.0155 1.06191C10.7897 0.353908 9.45149 0 7.99993 0C6.54855 0 5.20991 0.354017 3.98437 1.06191C2.75864 1.76983 1.78831 2.73031 1.07293 3.94344C0.357655 5.15653 0 6.48124 0 7.91753C0 9.64284 0.50859 11.1943 1.52602 12.5723C2.54335 13.9503 3.85758 14.9039 5.46862 15.4331C5.65615 15.4675 5.79497 15.4433 5.88523 15.361C5.97553 15.2786 6.02062 15.1754 6.02062 15.0518C6.02062 15.0312 6.01884 14.8457 6.01537 14.4952C6.01179 14.1446 6.01012 13.8387 6.01012 13.5778L5.77052 13.6188C5.61776 13.6465 5.42505 13.6582 5.19239 13.6549C4.95984 13.6517 4.71843 13.6275 4.46848 13.5827C4.21841 13.5383 3.98583 13.4352 3.77053 13.2736C3.55535 13.1121 3.40259 12.9007 3.31229 12.6397L3.20813 12.4025C3.1387 12.2445 3.02939 12.0691 2.88006 11.8767C2.73073 11.6842 2.57972 11.5537 2.42697 11.485L2.35403 11.4334C2.30544 11.399 2.26034 11.3576 2.21864 11.3095C2.17698 11.2615 2.14578 11.2134 2.12495 11.1652C2.10408 11.117 2.12137 11.0775 2.17701 11.0464C2.23265 11.0154 2.3332 11.0004 2.4791 11.0004L2.68735 11.0312C2.82625 11.0587 2.99805 11.141 3.20298 11.2786C3.40781 11.416 3.57618 11.5947 3.70814 11.8145C3.86795 12.0964 4.06047 12.3111 4.28627 12.4589C4.51189 12.6067 4.73937 12.6805 4.96849 12.6805C5.19761 12.6805 5.3955 12.6633 5.56224 12.6291C5.72879 12.5947 5.88505 12.5431 6.03095 12.4744C6.09345 12.0137 6.26361 11.6598 6.54129 11.4124C6.14551 11.3713 5.78968 11.3093 5.47362 11.2268C5.15773 11.1443 4.83131 11.0103 4.49456 10.8246C4.15763 10.6391 3.87812 10.4087 3.65597 10.1339C3.43378 9.85899 3.25144 9.49804 3.10918 9.0514C2.96686 8.60458 2.89568 8.08916 2.89568 7.50498C2.89568 6.6732 3.17004 5.96538 3.71865 5.38113C3.46166 4.75579 3.48592 4.05476 3.79151 3.27812C3.9929 3.21619 4.29156 3.26267 4.68734 3.41725C5.0832 3.57191 5.37303 3.70439 5.55713 3.81424C5.74123 3.92405 5.88873 4.0171 5.99986 4.09257C6.64582 3.91394 7.31242 3.8246 7.99985 3.8246C8.68729 3.8246 9.35404 3.91394 10 4.09257L10.3958 3.84526C10.6665 3.68024 10.9862 3.52901 11.354 3.39154C11.722 3.25414 12.0035 3.2163 12.198 3.27823C12.5104 4.05491 12.5382 4.7559 12.2812 5.38124C12.8297 5.96549 13.1042 6.67349 13.1042 7.50509C13.1042 8.08927 13.0328 8.60632 12.8907 9.05657C12.7484 9.50689 12.5645 9.86748 12.3388 10.1391C12.113 10.4107 11.8317 10.6392 11.4949 10.8247C11.1581 11.0103 10.8316 11.1442 10.5157 11.2268C10.1997 11.3093 9.84384 11.3714 9.44806 11.4126C9.80903 11.7218 9.98956 12.2098 9.98956 12.8764V15.0516C9.98956 15.1751 10.033 15.2783 10.1199 15.3607C10.2067 15.443 10.3437 15.4673 10.5313 15.4328C12.1425 14.9037 13.4568 13.95 14.474 12.572C15.4912 11.194 16 9.64255 16 7.91724C15.9996 6.48113 15.6418 5.15653 14.9269 3.94344Z" fill="currentColor"></path> </svg>
                        </a>
                        <a href="https://facebook.com/ericlbarnes.dev" target="_blank" rel="noopener noreferrer">
                        <svg class="text-brand-500 h-4 mr-4 fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="currentColor"></path> <path d="M16.6711 15.4688L17.2031 12H13.875V9.75C13.875 8.80102 14.34 7.875 15.8306 7.875H17.3438V4.92188C17.3438 4.92188 15.9705 4.6875 14.6576 4.6875C11.9166 4.6875 10.125 6.34875 10.125 9.35625V12H7.07812V15.4688H10.125V23.8542C11.3674 24.0486 12.6326 24.0486 13.875 23.8542V15.4688H16.6711Z" fill="white"></path> </svg>
                        </a>
                    </div>
            </div>
    </div>
</div> --}}