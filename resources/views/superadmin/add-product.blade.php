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
									<a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
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
										<li><a href="email.html">Email</a></li>
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
							<a href="javascript:void(0);" class="subdrop active"><i class="ti ti-brand-unity fs-16 me-2"></i><span> Inventory
								</span> <span class="menu-arrow"></span></a>
							<ul>
								<li><a href="product-list.html"><span>Products</span></a></li>
								<li><a href="add-product.html" class="active"><span>Create Product</span></a></li>
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
							<a href="#" class="nav-link " title="Apps" data-bs-toggle="tab" data-bs-target="#application">
								<i class="ti ti-layout-grid-add"></i>
							</a>
							<a href="#" class="nav-link" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
								<i class="ti ti-layout-board-split"></i>
							</a>
							<a href="#" class="nav-link active" title="Inventory" data-bs-toggle="tab" data-bs-target="#inventory">
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
							<div class="tab-pane fade" id="application">
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
									<li><a href="email.html">Email</a></li>
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
							<div class="tab-pane fade show active" id="inventory">
								<ul>
									<li class="menu-title"><span>Inventory</span></li>
									<li><a href="product-list.html"><span>Products</span></a></li>
									<li><a href="add-product.html" class="active"><span>Create Product</span></a></li>
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

		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4 class="fw-bold">Create Product</h4>
							<h6>Create new product</h6>
						</div>
					</div>
					<ul class="table-top-head">
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i class="ti ti-refresh"></i></a>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i class="ti ti-chevron-up"></i></a>
						</li>
					</ul>
					<div class="page-btn mt-0">
						<a href="product-list.html" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Product</a>
					</div>
				</div>
				<form action="https://dreamspos.dreamstechnologies.com/html/template/add-product.html" class="add-product-form">
					<div class="add-product">
						<div class="accordions-items-seperate" id="accordionSpacingExample">
							<div class="accordion-item border mb-4">
								<h2 class="accordion-header" id="headingSpacingOne">
									<div class="accordion-button collapsed bg-white" data-bs-toggle="collapse" data-bs-target="#SpacingOne" aria-expanded="true" aria-controls="SpacingOne">
										<div class="d-flex align-items-center justify-content-between flex-fill">
										<h5 class="d-flex align-items-center"><i data-feather="info" class="text-primary me-2"></i><span>Product Information</span></h5>
										</div>
									</div>
								</h2>
								<div id="SpacingOne" class="accordion-collapse collapse show" aria-labelledby="headingSpacingOne">
									<div class="accordion-body border-top">
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Store<span class="text-danger ms-1">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Electro Mart</option>
														<option>Quantum Gadgets</option>
														<option>Gadget World</option>
														<option>Volt Vault</option>
														<option>Elite Retail</option>
														<option>Prime Mart</option>
														<option>NeoTech Store</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Warehouse<span class="text-danger ms-1">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Lavish Warehouse</option>
														<option>Quaint Warehouse</option>
														<option>Traditional Warehouse</option>
														<option>Cool Warehouse</option>
														<option>Overflow Warehouse</option>
														<option>Nova Storage Hub</option>
														<option>Retail Supply Hub</option>
														<option>EdgeWare Solutions</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Product Name<span class="text-danger ms-1">*</span></label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Slug<span class="text-danger ms-1">*</span></label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-12">
												<div class="mb-3 list position-relative">
													<label class="form-label">SKU<span class="text-danger ms-1">*</span></label>
													<input type="text" class="form-control list">
													<button type="submit" class="btn btn-primaryadd">
														Generate
													</button>
												</div>
											</div>
											<div class="col-sm-6 col-12">
												<div class="mb-3">
													<label class="form-label">Selling Type<span class="text-danger ms-1">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Online</option>
														<option>POS</option>
													</select>
												</div>
											</div>
										</div>
										<div class="addservice-info">
											<div class="row">
												<div class="col-sm-6 col-12">
													<div class="mb-3">
														<div class="add-newplus">
															<label class="form-label">Category<span class="text-danger ms-1">*</span></label>
															<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-product-category"><i data-feather="plus-circle" class="plus-down-add"></i><span>Add
																	New</span></a>
														</div>
														<select class="select">
															<option>Select</option>
															<option>Computers</option>
															<option>Electronics</option>
															<option>Shoe</option>
															<option>Cosmetics</option>
															<option>Groceries</option>
															<option>Furniture</option>
															<option>Bags</option>
															<option>Phone</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-12">
													<div class="mb-3">
														<label class="form-label">Sub Category<span class="text-danger ms-1">*</span></label>
														<select class="select">
															<option>Select</option>
															<option>Laptop</option>
															<option>Desktop</option>
															<option>Sneakers</option>
															<option>Formals</option>
															<option>Wearables</option>
															<option>Speakers</option>
															<option>Handbags</option>
															<option>Travel</option>
															<option>Sofa</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="add-product-new">
											<div class="row">
												<div class="col-sm-6 col-12">
													<div class="mb-3">
														<div class="add-newplus">
															<label class="form-label">Brand<span class="text-danger ms-1">*</span></label>
														</div>
														<select class="select">
															<option>Select</option>	
															<option>Lenevo</option>
															<option>Beats</option>
															<option>Nike</option>
															<option>Apple</option>
															<option>Amazon</option>
															<option>Woodmart</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-12">
													<div class="mb-3">
														<div class="add-newplus">
															<label class="form-label">Unit<span class="text-danger ms-1">*</span></label>
														</div>
														<select class="select">
															<option>Select</option>
															<option>Kg</option>
															<option>Pcs</option>
															<option>L</option>
															<option>dz</option>
															<option>bx</option>
														</select>
													</div>
												</div>
											</div>
										</div>			
										<div class="row">
											<div class="col-sm-6">
												<div class="mb-3">
													<div class="add-newplus">
														<label class="form-label">Barcode Symbology<span class="text-danger ms-1">*</span></label>
													</div>
													<select class="select">
														<option>Select</option>
														<option>Code 128</option>
														<option>Code 39</option>
														<option>UPC-A</option>
														<option>UPC_E</option>
														<option>EAN-8</option>
														<option>EAN-13</option>
													</select>
												</div>
											</div>
											<div class="col-lg-6 col-sm-6 col-12">
													<div class="mb-3">
														<label class="form-label">Barcode Symbology</label>
														<select class="select">
															<option>Choose</option>
															<option>Code 128</option>
															<option>Code 39</option>
															<option>UPC-A</option>
															<option>UPC-E</option>
															<option>EAN-8</option>
															<option>EAN-13</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 col-sm-6 col-12">
												<div class="mb-3 list position-relative">
														<label class="form-label">Item Barcode<span class="text-danger ms-1">*</span></label>
													<input type="text" class="form-control list">
													<button type="submit" class="btn btn-primaryadd">
														Generate
													</button>
												</div>
											</div>
										</div>
										<!-- Editor -->
										<div class="col-lg-12">
											<div class="summer-description-box">
												<label class="form-label">Description</label>
												<div id="summernote"></div>
												<p class="fs-14 mt-1">Maximum 60 Words</p>
											</div>
										</div>
										<!-- /Editor -->
									</div>
								</div>
							</div>
							<div class="accordion-item border mb-4"> 
								<h2 class="accordion-header" id="headingSpacingTwo">
									<div class="accordion-button collapsed bg-white" data-bs-toggle="collapse" data-bs-target="#SpacingTwo" aria-expanded="true" aria-controls="SpacingTwo">
										<div class="d-flex align-items-center justify-content-between flex-fill">
										<h5 class="d-flex align-items-center"><i data-feather="life-buoy" class="text-primary me-2"></i><span>Pricing & Stocks</span></h5>
										</div>
									</div>
								</h2>
								<div id="SpacingTwo" class="accordion-collapse collapse show" aria-labelledby="headingSpacingTwo">
									<div class="accordion-body border-top">
										<div class="mb-3s">
											<label class="form-label">Product Type<span class="text-danger ms-1">*</span></label>
											<div class="single-pill-product mb-3">
												<ul class="nav nav-pills" id="pills-tab1" role="tablist">
													<li class="nav-item" role="presentation">
														<span class="custom_radio me-4 mb-0 active" id="pills-home-tab" data-bs-toggle="pill"
														data-bs-target="#pills-home"  role="tab" aria-controls="pills-home" aria-selected="true">
															<input type="radio" class="form-control" name="payment">
														<span class="checkmark"></span> Single Product</span>
													</li>
													<li class="nav-item" role="presentation">
														<span  class="custom_radio me-2 mb-0" id="pills-profile-tab" data-bs-toggle="pill"
														data-bs-target="#pills-profile"  role="tab" aria-controls="pills-profile" aria-selected="false">
														<input type="radio" class="form-control" name="sign">
														<span class="checkmark"></span> Variable Product</span>
													</li>
												</ul>
											</div>
										</div>
										<div class="tab-content" id="pills-tabContent">
											<div class="tab-pane fade show active" id="pills-home" role="tabpanel"
												aria-labelledby="pills-home-tab">
												<div class="single-product">
												<div class="row">
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3">
															<label class="form-label">Quantity<span class="text-danger ms-1">*</span></label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3">
															<label class="form-label">Price<span class="text-danger ms-1">*</span></label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3">
															<label class="form-label">Tax Type<span class="text-danger ms-1">*</span></label>
															<select class="select">
																<option>Select</option>
																<option>Exclusive</option>
																	<option>Inclusive</option>
																</select>
															</div>
														</div>
														<div class="col-lg-4 col-sm-6 col-12">
															<div class="mb-3">
																<label class="form-label">Tax<span class="text-danger ms-1">*</span></label>
																<select class="select">
																	<option>Select</option>
																	<option>IGST (8%)</option>
																	<option>GST (5%)</option>
																	<option>SGST (4%)</option>
																	<option>CGST (16%)</option>
																<option>Gst 18%</option>
															</select>
														</div>
													</div>
									
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3">
															<label class="form-label">Discount Type<span class="text-danger ms-1">*</span></label>
															<select class="select">
																<option>Select</option>
																<option>Percentage</option>
																	<option>Fixed</option>
															</select>
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3">
															<label class="form-label">Discount Value<span class="text-danger ms-1">*</span></label>
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="col-lg-4 col-sm-6 col-12">
														<div class="mb-3">
															<label class="form-label">Quantity Alert<span class="text-danger ms-1">*</span></label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>		
											</div>
											<div class="tab-pane fade" id="pills-profile" role="tabpanel"
											aria-labelledby="pills-profile-tab">
											<div class="row select-color-add">
												<div class="col-lg-6 col-sm-6 col-12">
													<div class="mb-3">
														<label class="form-label">Variant Attribute <span class="text-danger ms-1">*</span></label>
														<div class="row">
															<div class="col-lg-10 col-sm-10 col-10">
																<select class="form-control variant-select select-option" id="colorSelect">
																	<option >Choose</option>
																	<option >Color</option>
																	<option value="red" >Red</option>
																	<option value="black">Black</option>
																</select>
															</div>
															<div class="col-lg-2 col-sm-2 col-2 ps-0">
																<div class="add-icon tab">
																	<a class="btn btn-filter" data-bs-toggle="modal" data-bs-target="#add-product-category"><i class="feather feather-plus-circle"></i></a>
																</div>
															</div>
														</div>
													</div>
													<div class="selected-hide-color" id="input-show">
														<label class="form-label">Variant Attribute <span class="text-danger ms-1">*</span></label>
														<div class="row align-items-center" >
															<div class="col-lg-10 col-sm-10 col-10">
																<div class="mb-3">
																	<input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput"  name="specialist" value="red, black" >
																</div>
															</div>
															<div class="col-lg-2 col-sm-2 col-2 ps-0">
																<div class="mb-3 ">
																	<a href="javascript:void(0);" class="remove-color"><i class="far fa-trash-alt"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-body-table border" id="variant-table">
												<div class="table-responsive">
													<table class="table border">
														<thead>
															<tr>
																<th>Variantion</th>
																<th>Variant Value</th>
																<th>SKU</th>
																<th>Quantity</th>
																<th>Price</th>
																<th class="no-sort"></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="color">
																	</div>												
																</td>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="red">
																	</div>
																</td>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="1234">
																	</div>
																</td>
																<td>
																	<div class="product-quantity">
																		<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																		<input type="text" class="quntity-input form-control" value="2">
																		<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																	</div>
																</td>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="50000">
																	</div>
																</td>
																<td class="action-table-data">
																	<div class="edit-delete-action">
																		<div class="input-block add-lists">
																			<label class="checkboxs">
																				<input type="checkbox" checked>
																				<span class="checkmarks"></span>
																			</label>
																		</div>
																		<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-variation">
																			<i data-feather="plus" class="feather-edit"></i>
																		</a>
																		<a data-bs-toggle="modal" data-bs-target="#delete-modal" class="p-2" href="javascript:void(0);">
																			<i data-feather="trash-2" class="feather-trash-2"></i>
																		</a>
																	</div>
																	
																</td>
															</tr>
															<tr>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="color">
																	</div>												
																</td>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="black">
																	</div>
																</td>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="2345">
																	</div>
																</td>
																<td>
																	<div class="product-quantity">
																		<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																		<input type="text" class="quntity-input form-control" value="3">
																		<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																	</div>
																</td>
																<td>
																	<div class="add-product">
																		<input type="text" class="form-control" value="50000">
																	</div>
																</td>
																<td class="action-table-data">
																	<div class="edit-delete-action">
																		<div class="input-block add-lists">
																			<label class="checkboxs">
																				<input type="checkbox" checked>
																				<span class="checkmarks"></span>
																			</label>
																		</div>
																		<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#add-variation">
																			<i data-feather="plus" class="feather-edit"></i>
																		</a>
																		<a data-bs-toggle="modal" data-bs-target="#delete-modal" class="p-2" href="javascript:void(0);">
																			<i data-feather="trash-2" class="feather-trash-2"></i>
																		</a>
																	</div>													
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											</div>	
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item border mb-4">
								<h2 class="accordion-header" id="headingSpacingThree">
									<div class="accordion-button collapsed bg-white" data-bs-toggle="collapse" data-bs-target="#SpacingThree" aria-expanded="true" aria-controls="SpacingThree">
										<div class="d-flex align-items-center justify-content-between flex-fill">
										<h5 class="d-flex align-items-center"><i data-feather="image" class="text-primary me-2"></i><span>Images</span></h5>
										</div>
									</div>
								</h2>
								<div id="SpacingThree" class="accordion-collapse collapse show" aria-labelledby="headingSpacingThree">
									<div class="accordion-body border-top">
										<div class="text-editor add-list add">
											<div class="col-lg-12">
												<div class="add-choosen">
													<div class="mb-3">
													<div class="image-upload image-upload-two">
															<input type="file">
															<div class="image-uploads">
																<i data-feather="plus-circle" class="plus-down-add me-0"></i>
																<h4>Add Images</h4>
															</div>
														</div>
													</div>
													<div class="phone-img">
														<img src="assets/img/products/phone-add-2.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
		
													<div class="phone-img">
														<img src="assets/img/products/phone-add-1.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item border mb-4">
								<h2 class="accordion-header" id="headingSpacingFour">
									<div class="accordion-button collapsed bg-white" data-bs-toggle="collapse" data-bs-target="#SpacingFour" aria-expanded="true" aria-controls="SpacingFour">
										<div class="d-flex align-items-center justify-content-between flex-fill">
										<h5 class="d-flex align-items-center"><i data-feather="list" class="text-primary me-2"></i><span>Custom Fields</span></h5>
										</div>
									</div>
								</h2>
								<div id="SpacingFour" class="accordion-collapse collapse show" aria-labelledby="headingSpacingFour">
									<div class="accordion-body border-top">
										<div>
											<div class="p-3 bg-light rounded d-flex align-items-center border mb-3">
												<div class=" d-flex align-items-center">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="warranties" value="option1">
														<label class="form-check-label" for="warranties">Warranties</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="manufacturer" value="option2">
														<label class="form-check-label" for="manufacturer">Manufacturer</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="expiry" value="option2">
														<label class="form-check-label" for="expiry">Expiry</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 col-12">
													<div class="mb-3">
														<label class="form-label">Warranty<span class="text-danger ms-1">*</span></label>
														<select class="select">
															<option>Select</option>
															<option>Replacement Warranty</option>
															<option>On-Site Warranty</option>
															<option>Accidental Protection Plan</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6 col-12">
													<div class="mb-3 add-product">
														<label class="form-label">Manufacturer<span class="text-danger ms-1">*</span></label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-6 col-12">
													<div class="mb-3">
														<label class="form-label">Manufactured Date<span class="text-danger ms-1">*</span></label>
				
														<div class="input-groupicon calender-input">
															<i data-feather="calendar" class="info-img"></i>
															<input type="text" class="datetimepicker form-control" placeholder="dd/mm/yyyy">
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-12">
													<div class="mb-3">
														<label class="form-label">Expiry On<span class="text-danger ms-1">*</span></label>
				
														<div class="input-groupicon calender-input">
															<i data-feather="calendar" class="info-img"></i>
															<input type="text" class="datetimepicker form-control" placeholder="dd/mm/yyyy">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="d-flex align-items-center justify-content-end mb-4">
							<button type="button" class="btn btn-secondary me-2">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Product</button>
						</div>
					</div>
				</form>
			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0 text-gray-9">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
				<p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- Add Category -->
	<div class="modal fade" id="add-product-category">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<div class="page-title">
						<h4>Add Category</h4>
					</div>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label class="form-label">Category<span class="ms-1 text-danger">*</span></label>
					<input type="text" class="form-control">
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">Cancel</a>
					<a href="add-product.html" class="btn btn-primary text-white fs-13 fw-medium p-2 px-3">Submit</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category -->

	<!-- Add Variatent -->
	<div class="modal fade" id="add-variation">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<div class="page-title">
						<h4>Add Variant</h4>
					</div>
					<button type="button" class="close bg-danger text-white fs-16" data-bs-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">	
					<div class="new-employee-field">	
						<div class="modal-title-head people-cust-avatar">
							<h6>Variant Thumbnail</h6>
						</div>
						<div class="profile-pic-upload mb-3">
							<div class="profile-pic brand-pic">
								<span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
							</div>
							<div>
								<div class="image-upload mb-0">
									<input type="file">
									<div class="image-uploads">
										<h4>Upload Image</h4>
									</div>
								</div>
								<p class="mt-2">JPEG, PNG up to 2 MB</p>
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="col-lg-6 pe-0">
							<div class="mb-3">
								<label class="form-label">Barcode Symbology<span class="text-danger ms-1">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Code 128</option>
									<option>Code 39</option>
									<option>UPC-A</option>
									<option>UPC_E</option>
									<option>EAN-8</option>
									<option>EAN-13</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<div class="mb-3 add-product list position-relative">
									<label class="form-label">Item Code<span class="text-danger ms-1">*</span></label>
									<input type="text" class="form-control list" value="">
									<button type="submit" class="btn btn-primaryadd">
										Generate
									</button>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="input-blocks mb-3 image-upload-down">
								<div class="image-upload download">
									<input type="file">
									<div class="image-uploads">
										<img src="assets/img/download-img.png" alt="img">
										<h4>Drag and drop a <span>file to upload</span></h4>
									</div>
								</div>
							</div>
							<div class="accordion-body">
								<div class="text-editor add-list add">
									<div class="col-lg-12">
										<div class="add-choosen mb-3">
											<div class="phone-img ms-0">
												<img src="assets/img/products/laptop.png" alt="image">
												<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
											</div>

											<div class="phone-img">
												<img src="assets/img/products/laptop-2.png" alt="image">
												<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Quantity<span class="text-danger ms-1">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Quantity Alert<span class="text-danger ms-1">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Tax Type<span class="text-danger ms-1">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Exclusive</option>
									<option>Inclusive</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Tax<span class="text-danger ms-1">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>No Tax</option>
									<option>10%</option>
									<option>15%</option>
									<option>20%</option>
									<option>Gst 18%</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Discount Type<span class="text-danger ms-1">*</span> </label>
								<select class="select">
									<option>Select</option>
									<option>Percentage</option>
									<option>Flat</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div >
								<label class="form-label">Discount Value<span class="text-danger ms-1">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>								
					</div>
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="btn me-1 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">Cancel</a>
					<a href="add-product.html" class="btn btn-primary fs-13 fw-medium p-2 px-3">Submit</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Variatent -->

	<!-- delete modal -->
	<div class="modal fade" id="delete-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content p-5 px-3 text-center">
							<span class="rounded-circle d-inline-flex p-2 bg-danger-transparent mb-2"><i class="ti ti-trash fs-24 text-danger"></i></span>
							<h4 class="fs-20 fw-bold mb-2 mt-1">Delete Attribute</h4>
							<p class="mb-0 fs-16">Are you sure you want to delete Attribute?</p>
							<div class="modal-footer-btn mt-3 d-flex justify-content-center">
								<button type="button" class="btn me-2 btn-secondary fs-13 fw-medium p-2 px-3 shadow-none" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary fs-13 fw-medium p-2 px-3">Yes Delete</button>
							</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection