</head>

<body>
    <div class="container-scroller">
        <!-- Navbar -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/"><img src="<?= base_url('images/favicon.png') ?>" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="/"><img src="<?= base_url('images/favicon.png') ?>" class="mr-2" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <?php
                // use App\Models\CartItemsModel;
                // $cartModel = new CartItemsModel();
                // $cart = $cartModel->where('user_id', session()->get('user_id'))->findAll();
                // $jml_item = 0;
                // foreach ($cart as $cartItem) {
                //     $jml_item = $jml_item + $cartItem['quantity'];
                // }
                ?>
                <ul class="navbar-nav navbar-nav-right">
                    <!-- <a class="nav-link" href="/user/cart">
                        <button class="btn"><i class="ti-shopping-cart"></i><span class="badge badge-pill badge-danger"><= $jml_item ?></span></button>    
                    </a> -->
                    <!-- <li class="nav-item nav-profile dropdown"> -->
                        <!-- <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="cartDropdown"> -->
                        <!-- <php if(empty($keranjang)){?> -->
                                <!-- <a class="dropdown-item" href="#">Keranjang Kosong</a> -->
                            <!-- <php }else{?> -->
                                <!-- <php foreach ($keranjang as $key => $value):?> -->
                                    <!-- <a class="dropdown-item" href="#">
                                        <div class="row">
                                            <div class="col-8">
                                                <h6 class="dropdown-item-title text-wrap mb-2"> -->
                                                    <!-- <= $value['name'] ?> -->
                                                    <!-- <p class="text-sm text-danger">jumlah = <= $value['qty']; ?></p>
                                                </h6>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-sm text-primary">Rp. <= $value['subtotal']; ?>.00</p>
                                            </div>
                                        </div>
                                    </a> -->
                                <!-- <php endforeach?> -->
                            <!-- <php } ?> -->
                            <!-- <div class="dropdown-divider"></div>
                                    <a class="dropdown-item d-flex flex-row-reverse" href="/user/cart">Check Out</a>
                        </div> -->
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link" href="/login">
                            Login/Register
                        </a>
                    </li>
                </ul>
            </div>
        </nav>