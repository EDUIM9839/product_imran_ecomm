   @extends('layout.main')
   @section('mains')
   <!-- Main Wrapper -->
        <div class="main-wrapper">

			
			<!-- Horizontal Sidebar -->
			<div class="sidebar sidebar-horizontal" id="horizontal-menu">
				<div id="sidebar-menu-3" class="sidebar-menu">
					<div class="main-menu">
						<ul class="nav-menu">
							<li class="submenu">
								<a href="index.html"><i class="ti ti-layout-grid fs-16 me-2"></i><span> Main Menu</span> <span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Dashboard</span> <span class="menu-arrow"></span></a>
										<ul>
											<li><a href="index.html">Admin Dashboard</a></li>
											<li><a href="admin-dashboard.html">Admin Dashboard 2</a></li>
											<li><a href="sales-dashboard.html">Sales Dashboard</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Super Admin</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="dashboard.html">Dashboard</a></li>
											<li><a href="companies.html">Companies</a></li>
											<li><a href="subscription.html">Subscriptions</a></li>
											<li><a href="packages.html">Packages</a></li>
											<li><a href="domain.html">Domain</a></li>
											<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);" class="active subdrop"><span>Application</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="chat.html">Chat</a></li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="video-call.html">Video Call</a></li>
													<li><a href="audio-call.html">Audio Call</a></li>
													<li><a href="call-history.html">Call History</a></li>
												</ul>
											</li>
											<li><a href="calendar.html">Calendar</a></li>
											<li><a href="contacts.html">Contacts</a></li>
											<li><a href="email.html" class="active">Email</a></li>
											<li><a href="todo.html">To Do</a></li>
											<li><a href="notes.html">Notes</a></li>
											<li><a href="file-manager.html">File Manager</a></li>
											<li><a href="projects.html">Projects</a></li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Ecommerce<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="products.html">Products</a></li>
													<li><a href="orders.html">Orders</a></li>
													<li><a href="customers.html">Customers</a></li>
													<li><a href="cart.html">Cart</a></li>
													<li><a href="checkout.html">Checkout</a></li>
													<li><a href="wishlist.html">Wishlist</a></li>
													<li><a href="reviews.html">Reviews</a></li>
												</ul>
											</li>
											<li><a href="social-feed.html">Social Feed</a></li>
											<li><a href="search-list.html">Search List</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Layouts</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="layout-horizontal.html">Horizontal</a></li>
											<li><a href="layout-detached.html">Detached</a></li>
											<li><a href="layout-two-column.html">Two Column</a></li>
											<li><a href="layout-hovered.html">Hovered</a></li>
											<li><a href="layout-boxed.html">Boxed</a></li>
											<li><a href="layout-rtl.html">RTL</a></li>
											<li><a href="layout-dark.html">Dark</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-brand-unity fs-16 me-2"></i><span> Inventory
									</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="product-list.html"><span>Products</span></a></li>
									<li><a href="add-product.html"><span>Create Product</span></a></li>
									<li><a href="expired-products.html"><span>Expired Products</span></a></li>
									<li><a href="low-stocks.html"><span>Low Stocks</span></a></li>
									<li><a href="category-list.html"><span>Category</span></a></li>
									<li><a href="sub-categories.html"><span>Sub Category</span></a></li>
									<li><a href="brand-list.html"><span>Brands</span></a></li>
									<li><a href="units.html"><span>Units</span></a></li>
									<li><a href="varriant-attributes.html"><span>Variant Attributes</span></a></li>
									<li><a href="warranty.html"><span>Warranties</span></a></li>
									<li><a href="barcode.html"><span>Print Barcode</span></a></li>
									<li><a href="qrcode.html"><span>Print QR Code</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-layout-grid fs-16 me-2"></i><span>Sales &amp; Purchase</span> <span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Stock</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="manage-stocks.html"><span>Manage Stock</span></a></li>
											<li><a href="stock-adjustment.html"><span>Stock Adjustment</span></a></li>
											<li><a href="stock-transfer.html"><span>Stock Transfer</span></a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu">
												<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
												<ul>
													<li><a href="online-orders.html">Online Orders</a></li>
													<li><a href="pos-orders.html">POS Orders</a></li>
												</ul>
											</li>
											<li><a href="invoice.html"><span>Invoices</span></a></li>
											<li><a href="sales-returns.html"><span>Sales Return</span></a></li>
											<li><a href="quotation-list.html"><span>Quotation</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"><span>POS</span><span class="menu-arrow"></span></a>
												<ul>
													<li><a href="pos.html">POS 1</a></li>
													<li><a href="pos-2.html">POS 2</a></li>
													<li><a href="pos-3.html">POS 3</a></li>
													<li><a href="pos-4.html">POS 4</a></li>
													<li><a href="pos-5.html">POS 5</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Promo</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="coupons.html"><span>Coupons</span></a></li>
											<li><a href="gift-cards.html"><span>Gift Cards</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"><span>Discount</span><span class="menu-arrow"></span></a>
												<ul>
													<li><a href="discount-plan.html">Discount Plan</a></li>
													<li><a href="discount.html">Discount</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Purchase</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="purchase-list.html"><span>Purchases</span></a></li>
											<li><a href="purchase-order-report.html"><span>Purchase Order</span></a></li>
											<li><a href="purchase-returns.html"><span>Purchase Return</span></a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="expense-list.html">Expenses</a></li>
											<li><a href="expense-category.html">Expense Category</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Income</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="income.html">Income</a></li>
											<li><a href="income-category.html">Income Category</a></li>
										</ul>
									</li>
									<li><a href="account-list.html"><span>Bank Accounts</span></a></li>
									<li><a href="money-transfer.html"><span>Money Transfer</span></a></li>
									<li><a href="balance-sheet.html"><span>Balance Sheet</span></a></li>
									<li><a href="trial-balance.html"><span>Trial Balance</span></a></li>
									<li><a href="cash-flow.html"><span>Cash Flow</span></a></li>
									<li><a href="account-statement.html"><span>Account Statement</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-users-group fs-16 me-2"></i><span>UI Interface</span> <span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Base UI</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="ui-alerts.html">Alerts</a></li>
											<li><a href="ui-accordion.html">Accordion</a></li>
											<li><a href="ui-avatar.html">Avatar</a></li>
											<li><a href="ui-badges.html">Badges</a></li>
											<li><a href="ui-borders.html">Border</a></li>
											<li><a href="ui-buttons.html">Buttons</a></li>
											<li><a href="ui-buttons-group.html">Button Group</a></li>
											<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
											<li><a href="ui-cards.html">Card</a></li>
											<li><a href="ui-carousel.html">Carousel</a></li>
											<li><a href="ui-colors.html">Colors</a></li>
											<li><a href="ui-dropdowns.html">Dropdowns</a></li>
											<li><a href="ui-grid.html">Grid</a></li>
											<li><a href="ui-images.html">Images</a></li>
											<li><a href="ui-lightbox.html">Lightbox</a></li>
											<li><a href="ui-media.html">Media</a></li>
											<li><a href="ui-modals.html">Modals</a></li>
											<li><a href="ui-offcanvas.html">Offcanvas</a></li>
											<li><a href="ui-pagination.html">Pagination</a></li>
											<li><a href="ui-popovers.html">Popovers</a></li>
											<li><a href="ui-progress.html">Progress</a></li>
											<li><a href="ui-placeholders.html">Placeholders</a></li>
											<li><a href="ui-rangeslider.html">Range Slider</a></li>
											<li><a href="ui-spinner.html">Spinner</a></li>
											<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
											<li><a href="ui-nav-tabs.html">Tabs</a></li>
											<li><a href="ui-toasts.html">Toasts</a></li>
											<li><a href="ui-tooltips.html">Tooltips</a></li>
											<li><a href="ui-typography.html">Typography</a></li>
											<li><a href="ui-video.html">Video</a></li>
											<li><a href="ui-sortable.html">Sortable</a></li>
											<li><a href="ui-swiperjs.html">Swiperjs</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Advanced UI</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="ui-ribbon.html">Ribbon</a></li>
											<li><a href="ui-clipboard.html">Clipboard</a></li>
											<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
											<li><a href="ui-rangeslider.html">Range Slider</a></li>
											<li><a href="ui-rating.html">Rating</a></li>
											<li><a href="ui-text-editor.html">Text Editor</a></li>
											<li><a href="ui-counter.html">Counter</a></li>
											<li><a href="ui-scrollbar.html">Scrollbar</a></li>
											<li><a href="ui-stickynote.html">Sticky Note</a></li>
											<li><a href="ui-timeline.html">Timeline</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="chart-apex.html">Apex Charts</a></li>
											<li><a href="chart-c3.html">Chart C3</a></li>
											<li><a href="chart-js.html">Chart Js</a></li>
											<li><a href="chart-morris.html">Morris Charts</a></li>
											<li><a href="chart-flot.html">Flot Charts</a></li>
											<li><a href="chart-peity.html">Peity Charts</a></li>
										</ul>
									</li>
									<li class="submenu">
									<a href="javascript:void(0);"><span>Icons</span><span class="menu-arrow"></span></a>
									<ul>
										<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
										<li><a href="icon-feather.html">Feather Icons</a></li>
										<li><a href="icon-ionic.html">Ionic Icons</a></li>
										<li><a href="icon-material.html">Material Icons</a></li>
										<li><a href="icon-pe7.html">Pe7 Icons</a></li>
										<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
										<li><a href="icon-themify.html">Themify Icons</a></li>
										<li><a href="icon-weather.html">Weather Icons</a></li>
										<li><a href="icon-typicon.html">Typicon Icons</a></li>
										<li><a href="icon-flag.html">Flag Icons</a></li>
										<li><a href="icon-tabler.html">Tabler Icons</a></li>
										<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
										<li><a href="icon-remix.html">Remix Icons</a></li>
									</ul>
								</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span> Forms</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);"><span>Form Elements</span><span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
													<li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
													<li><a href="form-input-groups.html">Input Groups</a></li>
													<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
													<li><a href="form-select.html">Form Select</a></li>
													<li><a href="form-mask.html">Input Masks</a></li>
													<li><a href="form-fileupload.html">File Uploads</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two">
												<a href="javascript:void(0);"><span> Layouts</span><span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="form-horizontal.html">Horizontal Form</a></li>
													<li><a href="form-vertical.html">Vertical Form</a></li>
													<li><a href="form-floating-labels.html">Floating Labels</a></li>
												</ul>
											</li>
											<li><a href="form-validation.html">Form Validation</a></li>
											<li><a href="form-select2.html">Select2</a></li>
											<li><a href="form-wizard.html">Form Wizard</a></li>
											<li><a href="form-pickers.html">Form Picker</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="tables-basic.html">Basic Tables </a></li>
											<li><a href="data-tables.html">Data Table </a></li>
										</ul>
									</li>
									<li  class="submenu">
										<a href="javascript:void(0);"><span>Maps</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="maps-vector.html">Vector</a></li>
											<li><a href="maps-leaflet.html">Leaflet</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-page-break fs-16 me-2"></i><span>Pages</span> <span class="menu-arrow"></span></a>
								<ul>
									<li><a href="profile.html"><span>Profile</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="signin.html">Cover</a></li>
													<li><a href="signin-2.html">Illustration</a></li>
													<li><a href="signin-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="register.html">Cover</a></li>
													<li><a href="register-2.html">Illustration</a></li>
													<li><a href="register-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="forgot-password.html">Cover</a></li>
													<li><a href="forgot-password-2.html">Illustration</a></li>
													<li><a href="forgot-password-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="reset-password.html">Cover</a></li>
													<li><a href="reset-password-2.html">Illustration</a></li>
													<li><a href="reset-password-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="email-verification.html">Cover</a></li>
													<li><a href="email-verification-2.html">Illustration</a></li>
													<li><a href="email-verification-3.html">Basic</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="two-step-verification.html">Cover</a></li>
													<li><a href="two-step-verification-2.html">Illustration</a></li>
													<li><a href="two-step-verification-3.html">Basic</a></li>
												</ul>
											</li>
											<li><a href="lock-screen.html">Lock Screen</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Error</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="error-404.html">404 Error </a></li>
											<li><a href="error-500.html">500 Error </a></li>
										</ul>
									</li>
									<li><a href="blank-page.html"><span>Blank Page</span> </a></li>
									<li><a href="pricing.html"><span>Pricing</span> </a></li>
									<li><a href="coming-soon.html"><span>Coming Soon</span> </a></li>
									<li><a href="under-maintenance.html"><span>Under Maintenance</span> </a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Content</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu">
												<a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
												<ul>
													<li><a href="pages.html">Pages</a></li>
												</ul>
											</li>
											<li class="submenu">
												<a href="javascript:void(0);"><span>Blog</span><span class="menu-arrow"></span></a>
												<ul>
													<li><a href="all-blog.html">All Blog</a></li>
													<li><a href="blog-tag.html">Blog Tags</a></li>
													<li><a href="blog-categories.html">Categories</a></li>
													<li><a href="blog-comments.html">Blog Comments</a></li>
												</ul>
											</li>
											<li class="submenu">
												<a href="javascript:void(0);"><span>Location</span><span class="menu-arrow"></span></a>
												<ul>
													<li><a href="countries.html">Countries</a></li>
													<li><a href="states.html">States</a></li>
													<li><a href="cities.html">Cities</a></li>
												</ul>
											</li>
											<li><a href="testimonials.html"><span>Testimonials</span></a></li>
											<li><a href="faq.html"><span>FAQ</span></a></li>
			
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Employees</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="employees-grid.html"><span>Employees</span></a></li>
											<li><a href="department-grid.html"><span>Departments</span></a></li>
											<li><a href="designation.html"><span>Designation</span></a></li>
											<li><a href="shift.html"><span>Shifts</span></a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="attendance-employee.html">Employee Attendence</a></li>
											<li><a href="attendance-admin.html">Admin Attendence</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Leaves &amp; Holidays</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="leaves-admin.html">Admin Leaves</a></li>
											<li><a href="leaves-employee.html">Employee Leaves</a></li>
											<li><a href="leave-types.html">Leave Types</a></li>
											<li><a href="holidays.html"><span>Holidays</span></a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="employee-salary.html"><span>Payroll</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="employee-salary.html">Employee Salary</a></li>
											<li><a href="payslip.html">Payslip</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-chart-bar fs-16 me-2"></i><span>Reports</span><span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Sales Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="sales-report.html">Sales Report</a></li>
											<li><a href="best-seller.html">Best Seller</a></li>
										</ul>
									</li>
									<li><a href="purchase-report.html"><span>Purchase report</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Inventory Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="inventory-report.html">Inventory Report</a></li>
											<li><a href="stock-history.html">Stock History</a></li>
											<li><a href="sold-stock.html">Sold Stock</a></li>
										</ul>
									</li>
									<li><a href="invoice-report.html"><span>Invoice Report</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Supplier Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="supplier-report.html">Supplier Report</a></li>
											<li><a href="supplier-due-report.html">Supplier Due Report</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Customer Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="customer-report.html">Customer Report</a></li>
											<li><a href="customer-due-report.html">Customer Due Report</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Product Report</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="product-report.html">Product Report</a></li>
											<li><a href="product-expiry-report.html">Product Expiry Report</a></li>
											<li><a href="product-quantity-alert.html">Product Quantity Alert</a></li>
										</ul>
									</li>
									<li><a href="expense-report.html"><span>Expense Report</span></a></li>
									<li><a href="income-report.html"><span>Income Report</span></a></li>
									<li><a href="tax-reports.html"><span>Tax Report</span></a></li>
									<li><a href="profit-and-loss.html"><span>Profit & Loss</span></a></li>
									<li><a href="annual-report.html"><span>Annual Report</span></a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-settings fs-16 me-2"></i><span>Settings</span><span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="general-settings.html">Profile</a></li>
											<li><a href="security-settings.html">Security</a></li>
											<li><a href="notification.html">Notifications</a></li>
											<li><a href="connected-apps.html">Connected Apps</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="system-settings.html">System Settings</a></li>
											<li><a href="company-settings.html">Company Settings </a></li>
											<li><a href="localization-settings.html">Localization</a></li>
											<li><a href="prefixes.html">Prefixes</a></li>
											<li><a href="preference.html">Preference</a></li>
											<li><a href="appearance.html">Appearance</a></li>
											<li><a href="social-authentication.html">Social Authentication</a></li>
											<li><a href="language-settings.html">Language</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Invoice<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="invoice-settings.html">Invoice Settings</a></li>
													<li><a href="invoice-template.html">Invoice Template</a></li>
												</ul>
											</li>
											<li><a href="printer-settings.html">Printer</a></li>
											<li><a href="pos-settings.html">POS</a></li>
											<li><a href="custom-fields.html">Custom Fields</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li class="submenu submenu-two"><a href="javascript:void(0);">Email<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="email-settings.html">Email Settings</a></li>
													<li><a href="email-template.html">Email Template</a></li>
												</ul>
											</li>
											<li class="submenu submenu-two"><a href="javascript:void(0);">SMS<span class="menu-arrow inside-submenu"></span></a>
												<ul>
													<li><a href="sms-settings.html">SMS Settings</a></li>
													<li><a href="sms-template.html">SMS Template</a></li>
												</ul>
											</li>
											<li><a href="otp-settings.html">OTP</a></li>
											<li><a href="gdpr-settings.html">GDPR Cookies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Financial Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="payment-gateway-settings.html">Payment Gateway</a></li>
											<li><a href="bank-settings-grid.html">Bank Accounts</a></li>
											<li><a href="tax-rates.html">Tax Rates</a></li>
											<li><a href="currency-settings.html">Currencies</a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="storage-settings.html">Storage</a></li>
											<li><a href="ban-ip-address.html">Ban IP Address</a></li>
										</ul>
									</li>
									<li>
									<a href="signin.html"><span>Logout</span> </a>
								</li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="ti ti-circle-plus fs-16 me-2"></i><span>More</span><span class="menu-arrow"></span></a>
								<ul>
									<li class="submenu">
										<a href="javascript:void(0);"><span>People</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="customers.html"><span>Customers</span></a></li>
											<li><a href="billers.html"><span>Billers</span></a></li>
											<li><a href="suppliers.html"><span>Suppliers</span></a></li>
											<li><a href="store-list.html"><span>Stores</span></a></li>
											<li><a href="warehouse.html"><span>Warehouses</span></a>
											</li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>User Management</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="users.html"><span>Users</span></a></li>
											<li><a href="roles-permissions.html"><span>Roles & Permissions</span></a></li>
											<li><a href="delete-account.html"><span>Delete Account Request</span></a></li>
										</ul>
									</li>
									<li class="submenu">
										<a href="javascript:void(0);"><span>Help</span><span class="menu-arrow"></span></a>
										<ul>
											<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
											<li><a href="javascript:void(0);"><span>Changelog v2.0.9</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
												<ul>
													<li><a href="javascript:void(0);">Level 1.1</a></li>
													<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
														<ul>
															<li><a href="javascript:void(0);">Level 2.1</a></li>
															<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
																<ul>
																	<li><a href="javascript:void(0);">Level 3.1</a></li>
																	<li><a href="javascript:void(0);">Level 3.2</a></li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Horizontal Sidebar -->

			<!-- Two Col Sidebar -->
			<div class="two-col-sidebar" id="two-col-sidebar">
				<div class="sidebar sidebar-twocol">
					<div class="twocol-mini">
						<div class="sidebar-left slimscroll">
							<div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist"
								aria-orientation="vertical">
								<a href="#" class="nav-link" title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
									<i class="ti ti-smart-home"></i>
								</a>
								<a href="#" class="nav-link " title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
									<i class="ti ti-user-star"></i>
								</a>
								<a href="#" class="nav-link active" title="Apps" data-bs-toggle="tab" data-bs-target="#application">
									<i class="ti ti-layout-grid-add"></i>
								</a>
								<a href="#" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
									<i class="ti ti-layout-board-split"></i>
								</a>
								<a href="#" class="nav-link" title="Inventory" data-bs-toggle="tab" data-bs-target="#inventory">
									<i class="ti ti-table-plus"></i>
								</a>
								<a href="#" class="nav-link" title="Stock" data-bs-toggle="tab" data-bs-target="#stock">
									<i class="ti ti-stack-3"></i>
								</a>
								<a href="#" class="nav-link" title="Sales" data-bs-toggle="tab" data-bs-target="#sales">
									<i class="ti ti-device-laptop"></i>
								</a>
								<a href="#" class="nav-link" title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
									<i class="ti ti-shopping-cart-dollar"></i>
								</a>
								<a href="#" class="nav-link" title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
									<i class="ti ti-cash"></i>
								</a>
								<a href="#" class="nav-link" title="Reports" data-bs-toggle="tab" data-bs-target="#reports">
									<i class="ti ti-license"></i>
								</a>
								<a href="#" class="nav-link" title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
									<i class="ti ti-page-break"></i>
								</a>
								<a href="#" class="nav-link" title="Settings" data-bs-toggle="tab" data-bs-target="#settings">
									<i class="ti ti-lock-check"></i>
								</a>
								<a href="#" class="nav-link " title="UI Elements" data-bs-toggle="tab" data-bs-target="#ui-elements">
									<i class="ti ti-ux-circle"></i>
								</a>
								<a href="#" class="nav-link" title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
									<i class="ti ti-vector-triangle"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="sidebar-right">
					<!-- Logo -->
					<div class="sidebar-logo">
						<a href="index.html" class="logo logo-normal">
							<img src="assets/img/logo.svg" alt="Img">
						</a>
						<a href="index.html" class="logo logo-white">
							<img src="assets/img/logo-white.svg" alt="Img">
						</a>
						<a href="index.html" class="logo-small">
							<img src="assets/img/logo-small.png" alt="Img">
						</a>
					</div>
					<!-- /Logo -->
						<div class="sidebar-scroll">
							<div class="text-center rounded bg-light p-3 mb-3 border">
								<div class="avatar avatar-lg online mb-3">
									<img src="assets/img/customer/customer15.jpg" alt="Img" class="img-fluid rounded-circle">
								</div>
								<h6 class="fs-14 fw-bold mb-1">Adrian Herman</h6>
								<p class="fs-12 mb-0">System Admin</p>
							</div>
							<div class="tab-content" id="v-pills-tabContent">
								<div class="tab-pane fade" id="dashboard">
									<ul>
										<li class="menu-title"><span>MAIN</span></li>
										<li><a href="index.html">Admin Dashboard</a></li>
										<li><a href="admin-dashboard.html">Admin Dashboard 2</a></li>
										<li><a href="sales-dashboard.html">Sales Dashboard</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="super-admin">
									<ul>
										<li class="menu-title"><span>SUPER ADMIN</span></li>
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="companies.html">Companies</a></li>
										<li><a href="subscription.html">Subscriptions</a></li>
										<li><a href="packages.html">Packages</a></li>
										<li><a href="domain.html">Domain</a></li>
										<li><a href="purchase-transaction.html">Purchase Transaction</a></li>
									</ul>
								</div>
								<div class="tab-pane fade show active" id="application">
									<ul>
										<li><a href="chat.html">Chat</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Call<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="video-call.html">Video Call</a></li>
												<li><a href="audio-call.html">Audio Call</a></li>
												<li><a href="call-history.html">Call History</a></li>
											</ul>
										</li>
										<li><a href="calendar.html">Calendar</a></li>
										<li><a href="contacts.html">Contacts</a></li>
										<li><a href="email.html" class="active">Email</a></li>
										<li><a href="todo.html">To Do</a></li>
										<li><a href="notes.html">Notes</a></li>
										<li><a href="file-manager.html">File Manager</a></li>
										<li><a href="projects.html">Projects</a></li>
										<li class="submenu submenu-two"><a href="javascript:void(0);">Ecommerce<span class="menu-arrow inside-submenu"></span></a>
											<ul>
												<li><a href="products.html">Products</a></li>
												<li><a href="orders.html">Orders</a></li>
												<li><a href="customers.html">Customers</a></li>
												<li><a href="cart.html">Cart</a></li>
												<li><a href="checkout.html">Checkout</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="reviews.html">Reviews</a></li>
											</ul>
										</li>
										<li><a href="social-feed.html">Social Feed</a></li>
										<li><a href="search-list.html">Search List</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="layout">
									<ul>
										<li class="menu-title"><span>LAYOUT</span></li>
										<li><a href="layout-horizontal.html">Horizontal</a></li>
										<li><a href="layout-detached.html">Detached</a></li>
										<li><a href="layout-two-column.html">Two Column</a></li>
										<li><a href="layout-hovered.html">Hovered</a></li>
										<li><a href="layout-boxed.html">Boxed</a></li>
										<li><a href="layout-rtl.html">RTL</a></li>
										<li><a href="layout-dark.html">Dark</a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="inventory">
									<ul>
										<li class="menu-title"><span>Inventory</span></li>
										<li><a href="product-list.html"><span>Products</span></a></li>
										<li><a href="add-product.html"><span>Create Product</span></a></li>
										<li><a href="expired-products.html"><span>Expired Products</span></a></li>
										<li><a href="low-stocks.html"><span>Low Stocks</span></a></li>
										<li><a href="category-list.html"><span>Category</span></a></li>
										<li><a href="sub-categories.html"><span>Sub Category</span></a></li>
										<li><a href="brand-list.html"><span>Brands</span></a></li>
										<li><a href="units.html"><span>Units</span></a></li>
										<li><a href="varriant-attributes.html"><span>Variant Attributes</span></a></li>
										<li><a href="warranty.html"><span>Warranties</span></a></li>
										<li><a href="barcode.html"><span>Print Barcode</span></a></li>
										<li><a href="qrcode.html"><span>Print QR Code</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="stock">
									<ul>
										<li class="menu-title"><span>Stock</span></li>
										<li><a href="manage-stocks.html"><span>Manage Stock</span></a></li>
										<li><a href="stock-adjustment.html"><span>Stock Adjustment</span></a></li>
										<li><a href="stock-transfer.html"><span>Stock Transfer</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="sales">
									<ul>
										<li class="menu-title"><span>Sales</span></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="online-orders.html">Online Orders</a></li>
												<li><a href="pos-orders.html">POS Orders</a></li>
											</ul>
										</li>
										<li><a href="invoice.html"><span>Invoices</span></a></li>
										<li><a href="sales-returns.html"><span>Sales Return</span></a></li>
										<li><a href="quotation-list.html"><span>Quotation</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>POS</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="pos.html">POS 1</a></li>
												<li><a href="pos-2.html">POS 2</a></li>
												<li><a href="pos-3.html">POS 3</a></li>
												<li><a href="pos-4.html">POS 4</a></li>
												<li><a href="pos-5.html">POS 5</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="finance">
									<ul>
										<li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
										<li><a href="coupons.html"><span>Coupons</span></a></li>
										<li><a href="gift-cards.html"><span>Gift Cards</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Discount</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="discount-plan.html">Discount Plan</a></li>
												<li><a href="discount.html">Discount</a></li>
											</ul>
										</li>
										<li><a href="purchase-list.html"><span>Purchases</span></a></li>
										<li><a href="purchase-order-report.html"><span>Purchase Order</span></a></li>
										<li><a href="purchase-returns.html"><span>Purchase Return</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="expense-list.html">Expenses</a></li>
												<li><a href="expense-category.html">Expense Category</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Income</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="income.html">Income</a></li>
												<li><a href="income-category.html">Income Category</a></li>
											</ul>
										</li>
										<li><a href="account-list.html"><span>Bank Accounts</span></a></li>
										<li><a href="money-transfer.html"><span>Money Transfer</span></a></li>
										<li><a href="balance-sheet.html"><span>Balance Sheet</span></a></li>
										<li><a href="trial-balance.html"><span>Trial Balance</span></a></li>
										<li><a href="cash-flow.html"><span>Cash Flow</span></a></li>
										<li><a href="account-statement.html"><span>Account Statement</span></a></li>
										<li><a href="customers.html"><span>Customers</span></a></li>
										<li><a href="billers.html"><span>Billers</span></a></li>
										<li><a href="suppliers.html"><span>Suppliers</span></a></li>
										<li><a href="store-list.html"><span>Stores</span></a></li>
										<li><a href="warehouse.html"><span>Warehouses</span></a></li>							
									</ul>
								</div>
								<div class="tab-pane fade" id="hrm">
									<ul>
										<li class="menu-title"><span>Hrm</span></li>
										<li><a href="employees-grid.html"><span>Employees</span></a></li>
										<li><a href="department-grid.html"><span>Departments</span></a></li>
										<li><a href="designation.html"><span>Designation</span></a></li>
										<li><a href="shift.html"><span>Shifts</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="attendance-employee.html">Employee</a></li>
												<li><a href="attendance-admin.html">Admin</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Leaves</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="leaves-admin.html">Admin Leaves</a></li>
												<li><a href="leaves-employee.html">Employee Leaves</a></li>
												<li><a href="leave-types.html">Leave Types</a></li>
											</ul>
										</li>
										<li><a href="holidays.html"><span>Holidays</span></a>
										</li>
										<li class="submenu">
											<a href="employee-salary.html"><span>Payroll</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="employee-salary.html">Employee Salary</a></li>
												<li><a href="payslip.html">Payslip</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="reports">
									<ul>
										<li class="menu-title"><span>Reports</span></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Sales Report</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="sales-report.html">Sales Report</a></li>
												<li><a href="best-seller.html">Best Seller</a></li>
											</ul>
										</li>
										<li><a href="purchase-report.html"><span>Purchase report</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Inventory Report</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="inventory-report.html">Inventory Report</a></li>
												<li><a href="stock-history.html">Stock History</a></li>
												<li><a href="sold-stock.html">Sold Stock</a></li>
											</ul>
										</li>
										<li><a href="invoice-report.html"><span>Invoice Report</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Supplier Report</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="supplier-report.html">Supplier Report</a></li>
												<li><a href="supplier-due-report.html">Supplier Due Report</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Customer Report</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="customer-report.html">Customer Report</a></li>
												<li><a href="customer-due-report.html">Customer Due Report</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Product Report</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="product-report.html">Product Report</a></li>
												<li><a href="product-expiry-report.html">Product Expiry Report</a></li>
												<li><a href="product-quantity-alert.html">Product Quantity Alert</a></li>
											</ul>
										</li>
										<li><a href="expense-report.html"><span>Expense Report</span></a></li>
										<li><a href="income-report.html"><span>Income Report</span></a></li>
										<li><a href="tax-reports.html"><span>Tax Report</span></a></li>
										<li><a href="profit-and-loss.html"><span>Profit & Loss</span></a></li>
										<li><a href="annual-report.html"><span>Annual Report</span></a></li>
									</ul>
								</div>
								<div class="tab-pane fade" id="pages">
									<ul>
										<li class="menu-title"><span>Pages</span></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="pages.html">Pages</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Blog</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="all-blog.html">All Blog</a></li>
												<li><a href="blog-tag.html">Blog Tags</a></li>
												<li><a href="blog-categories.html">Categories</a></li>
												<li><a href="blog-comments.html">Blog Comments</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Location</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="countries.html">Countries</a></li>
												<li><a href="states.html">States</a></li>
												<li><a href="cities.html">Cities</a></li>
											</ul>
										</li>
										<li><a href="testimonials.html"><span>Testimonials</span></a></li>
										<li><a href="faq.html"><span>FAQ</span></a></li>
										<li><a href="users.html"><span>Users</span></a></li>
										<li><a href="roles-permissions.html"><span>Roles & Permissions</span></a></li>
										<li><a href="delete-account.html"><span>Delete Account Request</span></a></li>
										<li><a href="profile.html"><span>Profile</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
											<ul>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="signin.html">Cover</a></li>
														<li><a href="signin-2.html">Illustration</a></li>
														<li><a href="signin-3.html">Basic</a></li>
													</ul>
												</li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="register.html">Cover</a></li>
														<li><a href="register-2.html">Illustration</a></li>
														<li><a href="register-3.html">Basic</a></li>
													</ul>
												</li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="forgot-password.html">Cover</a></li>
														<li><a href="forgot-password-2.html">Illustration</a></li>
														<li><a href="forgot-password-3.html">Basic</a></li>
													</ul>
												</li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="reset-password.html">Cover</a></li>
														<li><a href="reset-password-2.html">Illustration</a></li>
														<li><a href="reset-password-3.html">Basic</a></li>
													</ul>
												</li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="email-verification.html">Cover</a></li>
														<li><a href="email-verification-2.html">Illustration</a></li>
														<li><a href="email-verification-3.html">Basic</a></li>
													</ul>
												</li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="two-step-verification.html">Cover</a></li>
														<li><a href="two-step-verification-2.html">Illustration</a></li>
														<li><a href="two-step-verification-3.html">Basic</a></li>
													</ul>
												</li>
												<li><a href="lock-screen.html">Lock Screen</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Error Pages</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="error-404.html">404 Error </a></li>
												<li><a href="error-500.html">500 Error </a></li>
											</ul>
										</li>
										<li>
											<a href="blank-page.html"><span>Blank Page</span> </a>
										</li>
										<li>
											<a href="pricing.html"><span>Pricing</span> </a>
										</li>
										<li>
											<a href="coming-soon.html"><span>Coming Soon</span> </a>
										</li>
										<li>
											<a href="under-maintenance.html"><span>Under Maintenance</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="settings">
									<ul>
										<li class="menu-title"><span>Settings</span></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="general-settings.html">Profile</a></li>
												<li><a href="security-settings.html">Security</a></li>
												<li><a href="notification.html">Notifications</a></li>
												<li><a href="connected-apps.html">Connected Apps</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="system-settings.html">System Settings</a></li>
												<li><a href="company-settings.html">Company Settings </a></li>
												<li><a href="localization-settings.html">Localization</a></li>
												<li><a href="prefixes.html">Prefixes</a></li>
												<li><a href="preference.html">Preference</a></li>
												<li><a href="appearance.html">Appearance</a></li>
												<li><a href="social-authentication.html">Social Authentication</a></li>
												<li><a href="language-settings.html">Language</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>App Settings</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Invoice<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="invoice-settings.html">Invoice Settings</a></li>
														<li><a href="invoice-template.html">Invoice Template</a></li>
													</ul>
												</li>
												<li><a href="printer-settings.html">Printer</a></li>
												<li><a href="pos-settings.html">POS</a></li>
												<li><a href="custom-fields.html">Custom Fields</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>System Settings</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Email<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="email-settings.html">Email Settings</a></li>
														<li><a href="email-template.html">Email Template</a></li>
													</ul>
												</li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">SMS<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="sms-settings.html">SMS Settings</a></li>
														<li><a href="sms-template.html">SMS Template</a></li>
													</ul>
												</li>
												<li><a href="otp-settings.html">OTP</a></li>
												<li><a href="gdpr-settings.html">GDPR Cookies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>Financial Settings</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="payment-gateway-settings.html">Payment Gateway</a></li>
												<li><a href="bank-settings-grid.html">Bank Accounts</a></li>
												<li><a href="tax-rates.html">Tax Rates</a></li>
												<li><a href="currency-settings.html">Currencies</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>Other Settings</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="storage-settings.html">Storage</a></li>
												<li><a href="ban-ip-address.html">Ban IP Address</a></li>
											</ul>
										</li>
										<li>
											<a href="signin.html"><span>Logout</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="ui-elements">
									<ul>
										<li class="menu-title"><span>Ui Interface</span></li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>Base UI</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="ui-alerts.html">Alerts</a></li>
												<li><a href="ui-accordion.html">Accordion</a></li>
												<li><a href="ui-avatar.html">Avatar</a></li>
												<li><a href="ui-badges.html">Badges</a></li>
												<li><a href="ui-borders.html">Border</a></li>
												<li><a href="ui-buttons.html">Buttons</a></li>
												<li><a href="ui-buttons-group.html">Button Group</a></li>
												<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
												<li><a href="ui-cards.html">Card</a></li>
												<li><a href="ui-carousel.html">Carousel</a></li>
												<li><a href="ui-colors.html">Colors</a></li>
												<li><a href="ui-dropdowns.html">Dropdowns</a></li>
												<li><a href="ui-grid.html">Grid</a></li>
												<li><a href="ui-images.html">Images</a></li>
												<li><a href="ui-lightbox.html">Lightbox</a></li>
												<li><a href="ui-media.html">Media</a></li>
												<li><a href="ui-modals.html">Modals</a></li>
												<li><a href="ui-offcanvas.html">Offcanvas</a></li>
												<li><a href="ui-pagination.html">Pagination</a></li>
												<li><a href="ui-popovers.html">Popovers</a></li>
												<li><a href="ui-progress.html">Progress</a></li>
												<li><a href="ui-placeholders.html">Placeholders</a></li>
												<li><a href="ui-rangeslider.html">Range Slider</a></li>
												<li><a href="ui-spinner.html">Spinner</a></li>
												<li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
												<li><a href="ui-nav-tabs.html">Tabs</a></li>
												<li><a href="ui-toasts.html">Toasts</a></li>
												<li><a href="ui-tooltips.html">Tooltips</a></li>
												<li><a href="ui-typography.html">Typography</a></li>
												<li><a href="ui-video.html">Video</a></li>
												<li><a href="ui-sortable.html">Sortable</a></li>
												<li><a href="ui-swiperjs.html">Swiperjs</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>Advanced UI</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="ui-ribbon.html">Ribbon</a></li>
												<li><a href="ui-clipboard.html">Clipboard</a></li>
												<li><a href="ui-drag-drop.html">Drag & Drop</a></li>
												<li><a href="ui-rangeslider.html">Range Slider</a></li>
												<li><a href="ui-rating.html">Rating</a></li>
												<li><a href="ui-text-editor.html">Text Editor</a></li>
												<li><a href="ui-counter.html">Counter</a></li>
												<li><a href="ui-scrollbar.html">Scrollbar</a></li>
												<li><a href="ui-stickynote.html">Sticky Note</a></li>
												<li><a href="ui-timeline.html">Timeline</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>Charts</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="chart-apex.html">Apex Charts</a></li>
												<li><a href="chart-c3.html">Chart C3</a></li>
												<li><a href="chart-js.html">Chart Js</a></li>
												<li><a href="chart-morris.html">Morris Charts</a></li>
												<li><a href="chart-flot.html">Flot Charts</a></li>
												<li><a href="chart-peity.html">Peity Charts</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>Icons</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
												<li><a href="icon-feather.html">Feather Icons</a></li>
												<li><a href="icon-ionic.html">Ionic Icons</a></li>
												<li><a href="icon-material.html">Material Icons</a></li>
												<li><a href="icon-pe7.html">Pe7 Icons</a></li>
												<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
												<li><a href="icon-themify.html">Themify Icons</a></li>
												<li><a href="icon-weather.html">Weather Icons</a></li>
												<li><a href="icon-typicon.html">Typicon Icons</a></li>
												<li><a href="icon-flag.html">Flag Icons</a></li>
												<li><a href="icon-tabler.html">Tabler Icons</a></li>
												<li><a href="icon-bootstrap.html">Bootstrap Icons</a></li>
												<li><a href="icon-remix.html">Remix Icons</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);">
												<span>Forms</span><span class="menu-arrow"></span>
											</a>
											<ul>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-basic-inputs.html">Basic Inputs</a></li>
														<li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
														<li><a href="form-input-groups.html">Input Groups</a></li>
														<li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
														<li><a href="form-select.html">Form Select</a></li>
														<li><a href="form-mask.html">Input Masks</a></li>
														<li><a href="form-fileupload.html">File Uploads</a></li>
													</ul>
												</li>
												<li class="submenu submenu-two">
													<a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="form-horizontal.html">Horizontal Form</a></li>
														<li><a href="form-vertical.html">Vertical Form</a></li>
														<li><a href="form-floating-labels.html">Floating Labels</a></li>
													</ul>
												</li>
												<li><a href="form-validation.html">Form Validation</a></li>
												<li><a href="form-select2.html">Select2</a></li>
												<li><a href="form-wizard.html">Form Wizard</a></li>
												<li><a href="form-pickers.html">Form Picker</a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="tables-basic.html">Basic Tables </a></li>
												<li><a href="data-tables.html">Data Table </a></li>
											</ul>
										</li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Maps</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="maps-vector.html">Vector</a></li>
												<li><a href="maps-leaflet.html">Leaflet</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="tab-pane fade" id="extras">
									<ul>
										<li class="menu-title"><span>Help</span></li>
										<li><a href="javascript:void(0);"><span>Documentation</span></a></li>
										<li><a href="javascript:void(0);"><span>Changelog v2.0.9</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
											<ul>
												<li><a href="javascript:void(0);">Level 1.1</a></li>
												<li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
													<ul>
														<li><a href="javascript:void(0);">Level 2.1</a></li>
														<li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
															<ul>
																<li><a href="javascript:void(0);">Level 3.1</a></li>
																<li><a href="javascript:void(0);">Level 3.2</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Two Col Sidebar -->

            <!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content p-0">
				<div class="d-md-flex">
					<div class="email-sidebar border-end border-bottom">
						<div class="active slimscroll h-100">
							<div class="slimscroll-active-sidebar">					
								<div class="p-3">
									<div class="shadow-md bg-white rounded p-2 mb-4">
										<div class="d-flex align-items-center">
											<a href="javascript:void(0);" class="avatar avatar-md flex-shrink-0 me-2">
												<img src="assets/img/profiles/avatar-02.jpg" class="rounded-circle" alt="Img">
											</a>
											<div>
												<h6 class="mb-1"><a href="javascript:void(0);">James Hong</a></h6>
												<p><a href="https://dreamspos.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86cce8eeb5b2b5c6e3fee7ebf6eae3a8e5e9eb">[email&#160;protected]</a></p>
											</div>
										</div>
									</div>
									<a href="javascript:void(0);" class="btn btn-primary w-100" id="compose_mail"><i class="ti ti-edit me-2"></i>Compose</a>
									<div class="mt-4">
										<h5 class="mb-2">Emails</h5>
										<div class="d-block mb-4 pb-4 border-bottom email-tags">
											<a href="email.html" class="d-flex align-items-center justify-content-between p-2 rounded active">
												<span class="d-flex align-items-center fw-medium"><i class="ti ti-inbox text-gray me-2"></i>Inbox</span>
												<span class="badge shadow-none badge-danger rounded-pill badge-xs">56</span>
											</a>
											<a href="javascript:void(0);" class="d-flex align-items-center justify-content-between p-2 rounded">
												<span class="d-flex align-items-center fw-medium"><i class="ti ti-star text-gray me-2"></i>Starred</span>
												<span class="fw-semibold fs-12 badge text-gray rounded-pill">46</span>
											</a>
											<a href="javascript:void(0);" class="d-flex align-items-center justify-content-between p-2 rounded">
												<span class="d-flex align-items-center fw-medium"><i class="ti ti-rocket text-gray me-2"></i>Sent</span>
												<span class="badge shadow-none text-gray rounded-pill">14</span>
											</a>
											<a href="javascript:void(0);" class="d-flex align-items-center justify-content-between p-2 rounded">
												<span class="d-flex align-items-center fw-medium"><i class="ti ti-file text-gray me-2"></i>Drafts</span>
												<span class="badge shadow-none text-gray rounded-pill">12</span>
											</a>
											<a href="javascript:void(0);" class="d-flex align-items-center justify-content-between p-2 rounded">
												<span class="d-flex align-items-center fw-medium"><i class="ti ti-trash text-gray me-2"></i>Deleted</span>
												<span class="badge shadow-none text-gray rounded-pill">08</span>
											</a>
											<a href="javascript:void(0);" class="d-flex align-items-center justify-content-between p-2 rounded">
												<span class="d-flex align-items-center fw-medium"><i class="ti ti-info-octagon text-gray me-2"></i>Spam</span>
												<span class="badge shadow-none text-gray rounded-pill">0</span>
											</a>
											<div>
												<div class="more-menu">
													<a href="javascript:void(0);" class="d-flex align-items-center justify-content-between p-2 rounded">
														<span class="d-flex align-items-center fw-medium"><i class="ti ti-location-up text-gray me-2"></i>Important</span>
														<span class="badge shadow-none text-gray rounded-pill">12</span>
													</a>
													<a href="javascript:void(0);" class="d-flex align-items-center justify-content-between p-2 rounded">
														<span class="d-flex align-items-center fw-medium"><i class="ti ti-transition-top text-gray me-2"></i>All Emails</span>
														<span class="badge shadow-none text-gray rounded-pill">34</span>
													</a>
												</div>
												<div class="view-all mt-2">
													<a href="javascript:void(0);" class="viewall-button fw-medium"><span>Show More</span><i class="fa fa-chevron-down fs-10 ms-2"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="border-bottom mb-4 pb-4">
										<div class="d-flex align-items-center justify-content-between mb-2">
											<h5>Labels</h5>
											<a href="javascript:void(0);"><i class="ti ti-square-rounded-plus-filled text-primary fs-16"></i></a>
										</div>
										<div>
											<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
												<i class="ti ti-square-rounded text-success me-2"></i>
												Team Events
											</a>
											<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
												<i class="ti ti-square-rounded text-warning me-2"></i>
												Work
											</a>
											<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
												<i class="ti ti-square-rounded text-danger me-2"></i>
												External
											</a>	
											<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
												<i class="ti ti-square-rounded text-skyblue me-2"></i>
												Projects
											</a>
											<div>
												<div class="more-menu-2">
													<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
														<i class="ti ti-square-rounded text-purple me-2"></i>
														Applications
													</a>
													<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
														<i class="ti ti-square-rounded text-info me-2"></i>
														Desgin
													</a>
												</div>
												<div class="view-all mt-2">
													<a href="javascript:void(0);" class="viewall-button-2 fw-medium"><span>Show More</span><i class="fa fa-chevron-down fs-10 ms-2"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="border-bottom mb-4 pb-4">
										<div class="d-flex align-items-center justify-content-between mb-2">
											<h5>Folders</h5>
											<a href="javascript:void(0);"><i class="ti ti-square-rounded-plus-filled text-primary fs-16"></i></a>
										</div>
										<div>
											<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
												<i class="ti ti-folder-filled text-danger me-2"></i>
												Projects
											</a>
											<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
												<i class="ti ti-folder-filled text-warning me-2"></i>
												Personal
											</a>
											<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
												<i class="ti ti-folder-filled text-success me-2"></i>
												Finance
											</a>	
											<div>
												<div class="more-menu-3">
													<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
														<i class="ti ti-folder-filled text-info me-2"></i>
														Projects
													</a>
													<a href="javascript:void(0);" class="fw-medium d-flex align-items-center text-dark py-1">
														<i class="ti ti-folder-filled text-primary me-2"></i>
														Personal
													</a>
												</div>
												<div class="view-all mt-2">
													<a href="javascript:void(0);" class="viewall-button-3 fw-medium"><span>Show More</span><i class="fa fa-chevron-down fs-10 ms-2"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="bg-dark rounded text-center position-relative p-4">
										<span class="avatar avatar-lg rounded-circle bg-white mb-2">
											<i class="ti ti-alert-triangle text-dark"></i>
										</span>
										<h6 class="text-white mb-3">Enjoy Unlimited Access on a small price monthly.</h6>
										<a href="javascript:void(0);" class="btn btn-white position-relative justify-content-center z-1">Upgrade Now <i class="ti ti-arrow-right"></i></a>
										<div class="box-bg">
											<span class="bg-right"><img src="assets/img/bg/email-bg-01.png" alt="Img"></span>
											<span class="bg-left"><img src="assets/img/bg/email-bg-02.png" alt="Img"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-white flex-fill border-end border-bottom mail-notifications">
						<div class="active slimscroll h-100">
							<div class="slimscroll-active-sidebar">	
								<div class="p-3">
									<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
										<div>
											<h5 class="mb-1">Inbox</h5>
											<div class="d-flex align-items-center">
												<span>2345 Emails</span>
												<i class="ti ti-point-filled text-primary mx-1"></i>
												<span>56 Unread</span>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="position-relative input-icon me-3">
												<span class="input-icon-addon">
													<i class="ti ti-search"></i>
												</span>
												<input type="text" class="form-control" placeholder="Search Email">
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-filter-edit"></i></a>
												<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-settings"></i></a>
												<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-refresh"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="list-group list-group-flush mails-list">
									<div class="list-group-item border-bottom p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar bg-purple avatar-rounded me-2">
													<span class="avatar-title">CD</span>
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Justin Lapointe</a></h6>
															<span class="fw-semibold">Client Dashboard</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-success"></i>3:13 PM</span>
														</div>
													</div>
													<p>It seems that recipients are receiving...</p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark me-2"><i class="ti ti-folder-open me-2"></i>3</span>
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark"><i class="ti ti-photo me-2"></i>+24</span>
											</div>
											<div class="d-flex align-items-center">
												<span><i class="ti ti-star-filled text-warning"></i></span>
												<span class="badge shadow-none badge-soft-info mx-2"><i class="ti ti-square me-1"></i>Projects</span>
												<a href="javascript:void(0);" class="badge badge-dark rounded-pill badge-xs">+1</a>
											</div>
										</div>
									</div>
									<div class="list-group-item border-bottom p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar avatar-md avatar-rounded me-2">
													<img src="assets/img/profiles/avatar-01.jpg" alt="Img">
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Rufana</a></h6>
															<span class="fw-semibold">UI project</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-danger"></i>3:13 PM</span>
														</div>
													</div>
													<p>Regardless, you can usually expect an increase</p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<a href="javascript:void(0);"><img src="assets/img/icons/google-meet.svg" alt="Img" class="img-fluid"></a>
											<div class="d-flex align-items-center">
												<span><i class="ti ti-star-filled text-warning"></i></span>
												<span class="badge shadow-none badge-soft-purple mx-2"><i class="ti ti-square me-1"></i>Applications</span>
												<a href="javascript:void(0);" class="badge badge-dark rounded-pill badge-xs">+1</a>
											</div>
										</div>
									</div>
									<div class="list-group-item border-bottom p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar avatar-md avatar-rounded me-2">
													<img src="assets/img/profiles/avatar-03.jpg" alt="Img">
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Cameron Drake</a></h6>
															<span class="fw-semibold">You’re missing</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-danger"></i>3:13 PM</span>
														</div>
													</div>
													<p>Here are a few catchy email subject line examples </p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark fs-14"><i class="ti ti-video me-2"></i>1</span>
											</div>
											<div class="d-flex align-items-center">
												<span><i class="ti ti-star-filled text-warning"></i></span>
												<span class="badge shadow-none badge-soft-danger mx-2"><i class="ti ti-square me-1"></i>External</span>
												<a href="javascript:void(0);" class="badge badge-dark rounded-pill badge-xs">+1</a>
											</div>
										</div>
									</div>
									<div class="list-group-item border-bottom p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar avatar-md avatar-rounded me-2">
													<img src="assets/img/profiles/avatar-04.jpg" alt="Img">
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Sean Hill</a></h6>
															<span class="fw-semibold">How Have You Progressed</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-danger"></i>3:13 PM</span>
														</div>
													</div>
													<p>You can write effective retargeting subject</p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark"><i class="ti ti-photo me-2"></i>1</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="badge shadow-none badge-soft-success"><i class="ti ti-square me-1"></i>Team Events</span>
											</div>
										</div>
									</div>
									<div class="list-group-item border-bottom p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar avatar-md avatar-rounded me-2">
													<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Kevin Alley</a></h6>
															<span class="fw-semibold">Flash. Sale. Alert.</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-danger"></i>3:13 PM</span>
														</div>
													</div>
													<p>You can also use casual language,</p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark"><i class="ti ti-link me-2"></i>1</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="badge shadow-none badge-soft-danger me-2"><i class="ti ti-square me-1"></i>External</span>
												<a href="javascript:void(0);" class="badge badge-dark rounded-pill badge-xs">+1</a>
											</div>
										</div>
									</div>
									<div class="list-group-item border-bottom p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar avatar-md avatar-rounded me-2">
													<img src="assets/img/profiles/avatar-08.jpg" alt="Img">
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Linda Zimmer</a></h6>
															<span class="fw-semibold">Products the celebs are</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-danger"></i>3:13 PM</span>
														</div>
													</div>
													<p>It seems that recipients are receiving...</p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark"><i class="ti ti-link me-2"></i>1</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="badge shadow-none badge-soft-warning me-2"><i class="ti ti-square me-1"></i>Work</span>
												<a href="javascript:void(0);" class="badge badge-dark rounded-pill badge-xs">+1</a>
											</div>
										</div>
									</div>
									<div class="list-group-item border-bottom p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar bg-success avatar-rounded me-2">
													<span class="avatar-title">ER</span>
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Emly Reachel</a></h6>
															<span class="fw-semibold">No Subject</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-danger"></i>3:13 PM</span>
														</div>
													</div>
													<p>Announcing Fake Name Generator Premium</p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark"><i class="ti ti-folder-open me-2"></i>3</span>
											</div>
											<div class="d-flex align-items-center">
												<span class="badge shadow-none badge-soft-info shadow-none"><i class="ti ti-square me-1"></i>Projects</span>
											</div>
										</div>
									</div>
									<div class="list-group-item p-3">
										<div class="d-flex align-items-center mb-2">
											<div class="form-check form-check-md d-flex align-items-center flex-shrink-0 me-2">
												<input class="form-check-input" type="checkbox">
											</div>
											<div class="d-flex align-items-center flex-wrap row-gap-2 flex-fill">
												<a href="email-reply.html" class="avatar avatar-md avatar-rounded me-2">
													<img src="assets/img/profiles/avatar-07.jpg" alt="Img">
												</a>
												<div class="flex-fill">
													<div class="d-flex align-items-start justify-content-between">
														<div>
															<h6 class="mb-1"><a href="email-reply.html">Sean Hill</a></h6>
															<span class="fw-semibold">You’re missing</span>
														</div>
														<div class="d-flex align-items-center">
															<div class="dropdown">
																<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
																	<i class="ti ti-dots"></i>
																</button>
																<ul class="dropdown-menu dropdown-menu-end p-3">
																	<li>
																		<a class="dropdown-item rounded-1" href="email-reply.html">Open Email</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Reply All</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Forward As Attachment</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mark As Unread</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move to Junk</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Mute</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Delete</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Archive</a>
																	</li>
																	<li>
																		<a class="dropdown-item rounded-1" href="javascript:void(0);">Move To</a>
																	</li>
																</ul>
															</div>
															<span><i class="ti ti-point-filled text-danger"></i>3:13 PM</span>
														</div>
													</div>
													<p>Regardless, you can usually expect an increase</p>
												</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="d-flex align-items-center">
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark me-2"><i class="ti ti-folder-open me-2"></i>3</span>
												<span class="d-flex align-items-center btn btn-sm bg-transparent-dark"><i class="ti ti-photo me-2"></i>+24</span>
											</div>
											<div class="d-flex align-items-center">
												<span><i class="ti ti-star-filled text-warning"></i></span>
												<span class="badge shadow-none badge-soft-info mx-2"><i class="ti ti-square me-1"></i>Applications</span>
												<a href="javascript:void(0);" class="badge badge-dark rounded-pill badge-xs">+1</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
				<p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Compose Mail -->
		 <div id="compose-view">
			<div class="bg-white border-0 rounded compose-view">
				<div class="compose-header d-flex align-items-center justify-content-between bg-dark p-3">
					<h5 class="text-white">Compose New Email</h5>
					<div class="d-flex align-items-center">
						<a href="javascript:void(0);" class="d-inline-flex me-2 text-white fs-16"><i class="ti ti-minus"></i></a>
						<a href="javascript:void(0);" class="d-inline-flex me-2 fs-16 text-white"><i class="ti ti-maximize"></i></a>
						<button type="button" class="btn-close custom-btn-close bg-transparent fs-16 text-white position-static" id="compose-close">
							<i class="ti ti-x"></i>
						</button>
					</div>
				</div>
				<form action="https://dreamspos.dreamstechnologies.com/html/template/email.html">
					<div class="p-3 position-relative pb-2 border-bottom">
						<div class="tag-with-img d-flex align-items-center">
							<label class="form-label me-2">To</label>
							<input class="input-tags form-control border-0 h-100" id="inputBox" type="text" data-role="tagsinput"  name="Label" value="Angela Thomas" >
						</div>
						<div class="d-flex align-items-center email-cc">
							<a href="javascript:void(0);" class="d-inline-flex me-2">Cc</a>
							<a href="javascript:void(0);" class="d-inline-flex">Bcc</a>
						</div>
					</div>
					<div class="p-3 border-bottom">
						<div class="mb-3">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="mb-0">
							<textarea rows="7" class="form-control" placeholder="Compose Email"></textarea>
						</div>
					</div>
					<div class="p-3 d-flex align-items-center justify-content-between">
						<div class="d-flex align-items-center">
							<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-paperclip"></i></a>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-photo"></i></a>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-link"></i></a>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-pencil"></i></a>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-mood-smile"></i></a>
						</div>
						<div class="d-flex align-items-center compose-footer">
							<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-calendar-repeat"></i></a>
							<a href="javascript:void(0);" class="btn btn-icon btn-sm rounded-circle"><i class="ti ti-trash"></i></a>
							<button type="submit" class="btn btn-primary d-inline-flex align-items-center ms-2">Send <i class="ti ti-arrow-right ms-2"></i></button>
						</div>
					</div>
				</form>
			</div>
		 </div>
		<!-- /Compose Mail -->
			
        </div>
        <!-- /Main Wrapper -->
@endsection