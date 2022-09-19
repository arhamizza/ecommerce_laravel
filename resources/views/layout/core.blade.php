<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic page needs
    ============================================ -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="keywords"
        content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description"
        content="eMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon
    ============================================ -->

    <link rel="shortcut icon" type="image/png" href="{{ asset('ico/favicon-16x16.png') }}" />


    <!-- Libs CSS
    ============================================ -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/minicolors/miniColors.css') }}" rel="stylesheet">

    <!-- Theme CSS
    ============================================ -->
    <link href="{{ asset('css/themecss/so_searchpro.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so_megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-categories.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-listing-tabs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themecss/so-newletter-popup.css') }}" rel="stylesheet">


    <link href="{{ asset('css/footer/footer4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header/header4.css') }}" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('css/home4.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">



    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>

</head>

<body class="common-home res layout-4">

    <div id="wrapper" class="wrapper-fluid banners-effect-10 product_data">

        <!-- Header Container  -->

        <!-- //Header Container  -->
        @include('layout.navbar',
            ['category' => App\Models\Kategori::all()],
            ['cart' => App\Models\Cart::where('user_id', Auth::id())->get()])

        @yield('contents')

        <div class="whatsapp-chat">
            <a href="https://wa.me/6282234257824?text=Saya%20tertarik%20dengan%20produk%20yang%20Anda%20jual"
                target="_blank">
                <img src="{{ asset('image/icon/logo-wa-whatsapp.png') }}" alt="whatsapp-logo" height="50px"
                    width="50px">
            </a>
        </div>
        <!-- Main Container  -->

        <!-- //Main Container -->

        <!-- Footer Container -->
        <br>
        @include('layout.footer')


        <!-- //end Footer Container -->

    </div>


    <!-- Cpanel Block -->

    <!-- Begin Color Scheme
============================================ -->
    <?php
    require_once 'scssphp/scss.inc.php';

    use Leafo\ScssPhp\Compiler;
    use Leafo\ScssPhp\Server;

    $themeCssName = '';

    if (isset($_COOKIE['customColorScheme'])) {
        $ColorScheme = $_COOKIE['customColorScheme'];

        $themeCssName = 'theme-' . str_replace('#', '', $ColorScheme) . '.css';
        if (isset($_POST['submitbtn'])) {
            $themeColor = strtolower($ColorScheme);
            $scss = new Compiler();
            $scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');
            $scss->addImportPath('sass');
            $scss->setVariables([
                '$linkColor' => $themeColor,
                '$dir' => 'ltr',
            ]);

            $string_css = $scss->compile('@import "home4.scss"');
            file_put_contents('css/' . $themeCssName, $string_css);
        }
    }

    if (isset($_POST['submit-reset'])) {
        clear_css_cache('css');
        unset($_POST);
    }

    function clear_css_cache($type)
    {
        $files = glob('css/theme-*.' . $type);
        if ($files) {
            foreach ($files as $file) {
                if (file_exists($file)) {
                    unlink($file);
                }
            }
        }
    }
    ?>
    <link rel='stylesheet' property='stylesheet' href='css/themecss/cpanel.css' type='text/css' media='all' />
    <?php if (isset($ColorScheme)) { ?>
    <link rel='stylesheet' property='stylesheet' href='css/<?php echo $themeCssName; ?>' type='text/css' media='all' />
    <?php } ?>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myLargeModalLabel">Skin CSS</h4>
                </div>
                <div class="modal-body">
                    <textarea id="getCSSTextarea" class="get-css" readonly=""><?php $fileCssName = !empty($themeCssName) ? $themeCssName : 'theme.css';
                    echo '/********************************************
                                                                                                    ';
                    echo '*  Color Scheme: ' . $fileCssName;
                    echo '
                                                                                                    ********************************************/
                                                                                                    ';
                    echo file_get_contents('css/' . $fileCssName);
                    ?>
            </textarea>
                </div>


            </div>
        </div>
    </div>
    <!-- End Color Scheme
============================================ -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/630c4d5f54f06e12d8917429/1gbk0sg7j';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


    <!-- Include Libs & Plugins
============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/libs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/unveil/jquery.unveil.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/countdown/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/moment.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr/modernizr-2.6.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/minicolors/jquery.miniColors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.js') }}"></script>

    <!-- Theme files
============================================ -->

    <script type="text/javascript" src="{{ asset('js/themejs/application.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/themejs/homepage.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/themejs/toppanel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/addtocart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/cpanel.js') }}"></script>

    <!-- Theme files
 ============================================ -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            swal("Berhasil!", "{{ session('status') }}", "success");
        </script>
    @endif
    <script type="text/javascript" src="{{ asset('js/themejs/so_megamenu.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/addtocart.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/themejs/application.js') }}"></script>

    <script type="text/javascript">
        <!--
        // Check if Cookie exists
        if ($.cookie('display')) {
            view = $.cookie('display');
        } else {
            view = 'grid';
        }
        if (view) display(view);
        //
        -->
    </script>

    <script>
        function loadcart() {
            $.ajax({
                method: "GET",
                url: "/load-cart-data",
                success: function(response) {
                    $('.cart-count').html(response.count);
                }
            });
        }

        function loadwishlist() {
            $.ajax({
                method: "GET",
                url: "/load-wishlist-data",
                success: function(response) {
                    $('.wishlist-count').html(response.count);
                }
            });
        }

        $('.addToCartBtn').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: "POST",
                url: "/add-to-cart",
                data: {
                    'product_id': product_id,
                    'product_qty': product_qty,
                },
                success: function(response) {
                    swal(response.status);
                    loadcart();
                }
            });

        });

        $('.addToWishlist').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.prod_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: "POST",
                url: "/add-to-wishlist",
                data: {
                    'product_id': product_id,
                },
                success: function(response) {
                    swal(response.status);
                    loadwishlist();
                }
            });

        });

        $(document).ready(function() {
            loadcart();
            loadwishlist();

            $(document).on('click', '.increment-btn', function(e) {
                e.preventDefault();

                var inc_value = $(this).closest('.product_data').find('.qty-input').val();
                // var inc_value = $('.qty-input').val();
                var value = parseInt(inc_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value < 10) {
                    value++;
                    // $('.qty-input').val(value);
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }
            });

            $(document).on('click', '.decrement-btn', function(e) {
                e.preventDefault();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // var dec_value = $('.qty-input').val();
                var dec_value = $(this).closest('.product_data').find('.qty-input').val();
                var value = parseInt(dec_value, 10);
                value = isNaN(value) ? 0 : value;
                if (value > 1) {
                    value--;
                    // $('.qty-input').val(value);
                    $(this).closest('.product_data').find('.qty-input').val(value);
                }
            });

            // $('.delete-cart-item').click(function(e) {
            $(document).on('click', '.delete-cart-item', function(e) {
                e.preventDefault();

                var prod_id = $(this).closest('.product_data').find('.prod_id').val();
                $.ajax({
                    type: "POST",
                    url: "delete-cart-item",
                    data: {
                        'prod_id': prod_id,
                    },
                    success: function(response) {
                        // setTimeout(() => window.location.reload(), 1000);
                        $('.cartitems').load(location.href + " .cartitems");
                        $('.c').load(location.href + " .c");
                        loadcart();
                        // window.location.reload();
                        swal("Berhasil!", response.status, "success");
                    }
                });
            });
            $(document).on('click', '.remove-wishlist-item', function(e) {

                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var prod_id = $(this).closest('.product_data').find('.prod_id').val();
                $.ajax({
                    type: "POST",
                    url: "delete-wishlist-item",
                    data: {
                        'prod_id': prod_id,
                    },
                    success: function(response) {
                        // setTimeout(() => window.location.reload(), 1000);
                        loadwishlist();
                        $('.whishlistitems').load(location.href + " .whishlistitems");
                        // window.location.reload();

                        swal("Berhasil!", response.status, "success");
                    }
                });
            });

            $(document).on('click', '.changeQuantity', function(e) {
                e.preventDefault();


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var prod_id = $(this).closest('.product_data').find('.prod_id').val();
                var qty = $(this).closest('.product_data').find('.qty-input').val();
                data = {
                    'prod_id': prod_id,
                    'prod_qty': qty,
                }

                $.ajax({
                    type: "POST",
                    url: "update-cart",
                    data: data,
                    success: function(response) {
                        $('.whishlistitems').load(location.href + " .whishlistitems");
                        $('.cartitems').load(location.href + " .cartitems");
                    }
                });
            });
        });
//Dropdown Region Indo
        // $(function() {

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $('#provinsi').on('change', function() {
        //         let id_provinsi = $('#provinsi').val();

        //         $.ajax({
        //             type: "POST",
        //             url: "getkabupaten",
        //             data: {
        //                 'id_provinsi': id_provinsi
        //             },
        //             cache: false,
        //             success: function(msg) {
        //                 $('#kabupaten').html(msg);
        //                 $('#kecamatan').html('');
        //                 $('#desa').html('');
        //             },
        //             error: function(data) {
        //                 console.log('error:', data)
        //             },
        //         });
        //     })

        //     $('#kabupaten').on('change', function() {
        //         let id_kabupaten = $('#kabupaten').val();

        //         $.ajax({
        //             type: "POST",
        //             url: "getkecamatan",
        //             data: {
        //                 'id_kabupaten': id_kabupaten
        //             },
        //             cache: false,
        //             success: function(msg) {
        //                 $('#kecamatan').html(msg);
        //                 $('#desa').html('');

        //             },
        //             error: function(data) {
        //                 console.log('error:', data)
        //             },
        //         });
        //     })

        //     $('#kecamatan').on('change', function() {
        //         let id_kecamatan = $('#kecamatan').val();

        //         $.ajax({
        //             type: "POST",
        //             url: "getdesa",
        //             data: {
        //                 'id_kecamatan': id_kecamatan
        //             },
        //             cache: false,
        //             success: function(msg) {
        //                 $('#desa').html(msg);

        //             },
        //             error: function(data) {
        //                 console.log('error:', data)
        //             },
        //         });
        //     })

        // })

        $(document).ready(function() {
            $('.razorpay_btn').click(function(e) {
                e.preventDefault();

                var firstname = $('.firstname').val();
                var lastname = $('.lastname').val();
                var email = $('.email').val();
                var telephone = $('.telephone').val();
                var address1 = $('.address1').val();
                var postcode = $('.postcode').val();
                var address2 = $('.address2').val();
                var provinsi = $('.provinsi').val();
                var kabupaten = $('.kabupaten').val();
                var kecamatan = $('.kecamatan').val();
                var kelurahan = $('.kelurahan').val();

                if (!firstname) {
                    fname_error = "First Name is required";
                    $('#fname_error').html('');
                    $('#fname_error').html(fname_error);
                } else {
                    fname_error = "";
                    $('#fname_error').html('');
                }

                if (!lastname) {
                    lastname_error = "Last Name is required";
                    $('#lastname_error').html('');
                    $('#lastname_error').html(lastname_error);
                } else {
                    lastname_error = "";
                    $('#lastname_error').html('');
                }

                if (!email) {
                    email_error = "Email is required";
                    $('#email_error').html('');
                    $('#email_error').html(email_error);
                } else {
                    email_error = "";
                    $('#email_error').html('');
                }

                if (!telephone) {
                    telephone_error = "Telephone is required";
                    $('#telephone_error').html('');
                    $('#telephone_error').html(telephone_error);
                } else {
                    telephone_error = "";
                    $('#telephone_error').html('');
                }

                if (!address1) {
                    address1_error = "Address is required";
                    $('#address1_error').html('');
                    $('#address1_error').html(address1_error);
                } else {
                    address1_error = "";
                    $('#address1_error').html('');
                }

                if (!postcode) {
                    postcode_error = "Kode pos is required";
                    $('#postcode_error').html('');
                    $('#postcode_error').html(postcode_error);
                } else {
                    postcode_error = "";
                    $('#postcode_error').html('');
                }

                if (!address2) {
                    address2_error = "Address is required";
                    $('#address2_error').html('');
                    $('#address2_error').html(address2_error);
                } else {
                    address2_error = "";
                    $('#address2_error').html('');
                }

                if (!provinsi) {
                    provinsi_error = "Provinsi is required";
                    $('#provinsi_error').html('');
                    $('#provinsi_error').html(provinsi_error);
                } else {
                    provinsi_error = "";
                    $('#provinsi_error').html('');
                }

                if (!kabupaten) {
                    kabupaten_error = "Kabupaten is required";
                    $('#kabupaten_error').html('');
                    $('#kabupaten_error').html(kabupaten_error);
                } else {
                    kabupaten_error = "";
                    $('#kabupaten_error').html('');
                }

                if (!kecamatan) {
                    kecamatan_error = "Kecamatan is required";
                    $('#kecamatan_error').html('');
                    $('#kecamatan_error').html(kecamatan_error);
                } else {
                    kecamatan_error = "";
                    $('#kecamatan_error').html('');
                }

                if (!kelurahan) {
                    kelurahan_error = "Kelurahan is required";
                    $('#kelurahan_error').html('');
                    $('#kelurahan_error').html(kelurahan_error);
                } else {
                    kelurahan_error = "";
                    $('#kelurahan_error').html('');
                }

                if (fname_error != '' || lastname_error != '' || email_error != '' || telephone_error !=
                    '' || address1_error != '' || postcode_error != '' || address2_error != '' ||
                    provinsi_error != '' || kabupaten_error != '' || kecamatan_error != '' ||
                    kelurahan_error != '') {
                    return false;

                } else {
                    var data = {
                        'firstname': firstname,
                        'lastname': lastname,
                        'email': email,
                        'telephone': telephone,
                        'address1': address1,
                        'postcode': postcode,
                        'address2': address2,
                        'provinsi': provinsi,
                        'kabupaten': kabupaten,
                        'kecamatan': kecamatan,
                        'kelurahan': kelurahan
                    }

                    $.ajax({
                        method: "POST",
                        url: "/proceed-to-pay",
                        data: data,
                        success: function(response) {
                            // alert(response.total_price)
                            var options = {
                                "key": "rzp_test_kWL5A7KzhPXRoc", // Enter the Key ID generated from the Dashboard
                                "amount": 1 *
                                100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                                "currency": "IDR",
                                "name": response.firstname + ' ' + response.lastname,
                                "description": "Terima kasih telah berbelanja",
                                "image": "https://example.com/your_logo",
                                // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                                "handler": function(responsea) {
                                    // alert(responsea.razorpay_payment_id);
                                    $.ajax({
                                        type: "POST",
                                        url: "/place-order",
                                        data: {
                                            'fname': response.firstname,
                                            'lname': response.lastname,
                                            'email': response.email,
                                            'telephone': response.telephone,
                                            'address1': response.address1,
                                            'address2': response.address2,
                                            'postcode': response.postcode,
                                            'provinsi': response.provinsi,
                                            'kota': response.kabupaten,
                                            'kecamatan': response.kecamatan,
                                            'kelurahan': response.kelurahan,
                                            'payment_mode': "Paid by RazorPay",
                                            'payment_id': responsea
                                                .razorpay_payment_id,
                                        },
                                        success: function(responseb) {
                                            // alert(responseb.status);
                                            swal(responseb.status);
                                            window.location.href =
                                                "/my-orders";
                                        }
                                    });
                                },
                                "prefill": {
                                    "name": response.firstname + ' ' + response.lastname,
                                    "email": response.email,
                                    "contact": response.telephone
                                },
                                "theme": {
                                    "color": "#3399cc"
                                }
                            };
                            var rzp1 = new Razorpay(options);
                            rzp1.open();
                        }
                    });
                }
            });
        });
    </script>

    {{-- - ========================= PayPal ============================ --}}
    <script
        src="https://www.paypal.com/sdk/js?client-id=ATXhIG7NuXmmlsxZn_q1ptD1gaUNO-PkLttMv1rlBozAOwEUSzBwZhyjm_hzHYNne831-PVYaoqfnxCF"
        data-sdk-integration-source="integrationbuilder"></script>
    <script>
        const paypalButtonsComponent = paypal.Buttons({
            // optional styling for buttons
            // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
            style: {
                color: "gold",
                shape: "pill",
                layout: "horizontal"
            },

            // set up the transaction
            createOrder: (data, actions) => {
                // pass in any options from the v2 orders create call:
                // https://developer.paypal.com/api/orders/v2/#orders-create-request-body
                const createOrderPayload = {
                    purchase_units: [{
                        amount: {
                            value: "100"
                        }
                    }]
                };

                return actions.order.create(createOrderPayload);
            },

            // finalize the transaction
            onApprove: (data, actions) => {
                const captureOrderHandler = (details) => {
                    // const payerName = details.payer.name.given_name;
                    // console.log('Transaction completed');

                    var firstname = $('.firstname').val();
                    var lastname = $('.lastname').val();
                    var email = $('.email').val();
                    var telephone = $('.telephone').val();
                    var address1 = $('.address1').val();
                    var postcode = $('.postcode').val();
                    var address2 = $('.address2').val();
                    var provinsi = $('.provinsi').val();
                    var kabupaten = $('.kabupaten').val();
                    var kecamatan = $('.kecamatan').val();
                    var kelurahan = $('.kelurahan').val();

                    $.ajax({
                        type: "POST",
                        url: "/place-order",
                        data: {
                            'fname': firstname,
                            'lname': lastname,
                            'email': email,
                            'telephone': telephone,
                            'address1': address1,
                            'address2': address2,
                            'postcode': postcode,
                            'provinsi': provinsi,
                            'kota': kabupaten,
                            'kecamatan': kecamatan,
                            'kelurahan': kelurahan,
                            'payment_mode': "Paid by PayPal",
                            'payment_id': details.id,
                        },
                        success: function(response) {
                            // alert(responseb.status);
                            swal(response.status);
                            window.location.href = "/my-orders";
                        }
                    });
                };

                return actions.order.capture().then(captureOrderHandler);
            },

            // handle unrecoverable errors
            onError: (err) => {
                console.error('An error prevented the buyer from checking out with PayPal');
            }
        });

        paypalButtonsComponent
            .render("#paypal-button-container")
            .catch((err) => {
                console.error('PayPal Buttons failed to render');
            });
    </script>
    <script>
        var availableTags = [];
        $.ajax({
            type: "GET",
            url: "/product-list",
            success: function(response) {
                console.log(response);
                startAutoComplete(response);
            }
        });

        function startAutoComplete(availableTags) {
            $("#search_product").autocomplete({
                source: availableTags
            });
        }

    </script>
        <script>
            $(document).ready(function() {
                $('select[name="provinsi"]').on('change', function() {
                    let provinceId = $(this).val();
                    if (provinceId) {
                        jQuery.ajax({
                            url: '/alamat/' + provinceId + '/city',
                            type: "GET",
                            dataType: "json",
                            success:function(data) {
                                $('select[name="kota"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="kota"]').append(
                                        '<option value="' + key + '">' + value +
                                        '</option>');
                                });
                            },
                        });
                    } else {
                        $('select[name="kota"]').empty();
                    }
                });

            });
        </script>
</body>

</html>
