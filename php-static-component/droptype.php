
                                                                            <link rel="stylesheet" type="text/css" href="css/style.css" />
                                                                            <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
                                                                                                                                                                                                                           
                                                                                <section class="main right">
                                                                                    <div class="wrapper-demo">
                                                                                        <div id="dd3" class="wrapper-dropdown-3" tabindex="1">
                                                                                            <textarea name = "type" style="display: none; color: black"></textarea>
																							<span>Community type</span>
                                                                                            <ul class="dropdown">
                                                                                                <li><a href="#"><i class="icon-envelope icon-large"></i>Music</a></li>
                                                                                                <li><a href="#"><i class="icon-truck icon-large"></i>Art</a></li>
                                                                                                <li><a href="#"><i class="icon-plane icon-large"></i>Sport</a></li>
																								<li><a href="#"><i class="icon-envelope icon-large"></i>Techonology</a></li>
                                                                                                <li><a href="#"><i class="icon-truck icon-large"></i>Entrepreneurship</a></li>
                                                                                                <li><a href="#"><i class="icon-plane icon-large"></i>Dance</a></li>
																								<li><a href="#"><i class="icon-envelope icon-large"></i>Philantropic</a></li>
                                                                                                <li><a href="#"><i class="icon-truck icon-large"></i>NGO</a></li>
																								<li><a href="#"><i class="icon-truck icon-large"></i>Poetry</a></li>
                                                                                                <li><a href="#"><i class="icon-plane icon-large"></i>Other</a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        ​
                                                                                    </div>
                                                                                </section>

                                                                            <!-- jQuery if needed -->
                                                                            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                                                                            <script type="text/javascript">

                                                                                function DropDownIco(el) {
                                                                                    this.dd = el;
                                                                                    this.placeholder = this.dd.children('span');
																					 this.input = this.dd.children('textarea');
                                                                                    this.opts = this.dd.find('ul.dropdown > li');
                                                                                    this.val = '';
                                                                                    this.index = -1;
                                                                                    this.initEvents();
                                                                                }
                                                                                DropDownIco.prototype = {
                                                                                    initEvents: function () {
                                                                                        var obj = this;

                                                                                        obj.dd.on('click', function (event) {
                                                                                            $(this).toggleClass('active');
                                                                                            return false;
                                                                                        });

                                                                                        obj.opts.on('click', function () {
                                                                                            var opt = $(this);
                                                                                            obj.val = opt.text();
                                                                                            obj.index = opt.index();
                                                                                            obj.placeholder.text(obj.val+' community');
																							obj.input.text(obj.val);
                                                                                        });
                                                                                    },
                                                                                    getValue: function () {
                                                                                        return this.val;
                                                                                    },
                                                                                    getIndex: function () {
                                                                                        return this.index;
                                                                                    }
                                                                                }

                                                                                $(function () {

                                                                                    var dd = new DropDownIco($('#dd3'));

                                                                                    $(document).click(function () {
                                                                                        // all dropdowns
                                                                                        $('.wrapper-dropdown-3').removeClass('active');
                                                                                    });

                                                                                });

                                                                            </script>
