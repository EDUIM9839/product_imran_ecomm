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
									<a href="javascript:void(0);" class="active subdrop"><span>Dashboard</span> <span class="menu-arrow"></span></a>
									<ul>
										<li><a href="index.html">Admin Dashboard</a></li>
										<li><a href="admin-dashboard.html" class="active">Admin Dashboard 2</a></li>
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
							<a href="#" class="nav-link " title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
								<i class="ti ti-smart-home"></i>
							</a>
							<a href="#" class="nav-link " title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
								<i class="ti ti-user-star"></i>
							</a>
							<a href="#" class="nav-link " title="Apps" data-bs-toggle="tab" data-bs-target="#application">
								<i class="ti ti-layout-grid-add"></i>
							</a>
							<a href="#" class="nav-link active" title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
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
							<div class="tab-pane fade  show active" id="layout">
								<ul>
									<li class="menu-title"><span>LAYOUT</span></li>
									<li><a href="layout-horizontal.html">Horizontal</a></li>
									<li><a href="layout-detached.html">Detached</a></li>
									<li><a href="layout-two-column.html" class="active">Two Column</a></li>
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
											<li><a href="pos-1.html">POS 1</a></li>
											<li><a href="pos-2.html">POS 2</a></li>
											<li><a href="pos-3.html">POS 3</a></li>
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
									<li><a href="account-list-2.html"><span>Bank Accounts</span></a></li>
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
									<li><a href="designation.html">Designation</a></li>
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
								<li>
									<a href="vector-maps.html"><span>Vector Maps</span> </a>
								</li>
								<li>
									<a href="sitemap.html"><span>Sitemap</span> </a>
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
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card dash-widget w-100">
							<div class="card-body d-flex align-items-center">
								<div class="dash-widgetimg">
									<span><img src="assets/img/icons/dash1.svg" alt="img"></span>
								</div>
								<div class="dash-widgetcontent">
									<h5 class="mb-1">$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
									<p class="mb-0">Total Purchase Due</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card dash-widget dash1 w-100">
							<div class="card-body d-flex align-items-center">
								<div class="dash-widgetimg">
									<span><img src="assets/img/icons/dash2.svg" alt="img"></span>
								</div>
								<div class="dash-widgetcontent">
									<h5 class="mb-1">$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
									<p class="mb-0">Total Sales Due</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card dash-widget dash2 w-100">
							<div class="card-body d-flex align-items-center">
								<div class="dash-widgetimg">
									<span><img src="assets/img/icons/dash3.svg" alt="img"></span>
								</div>
								<div class="dash-widgetcontent">
									<h5 class="mb-1">$<span class="counters" data-count="385656.50">$385,656.50</span></h5>
									<p class="mb-0">Total Sale Amount</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="card dash-widget dash3 w-100">
							<div class="card-body d-flex align-items-center">
								<div class="dash-widgetimg">
									<span><img src="assets/img/icons/dash4.svg" alt="img"></span>
								</div>
								<div class="dash-widgetcontent">
									<h5 class="mb-1">$<span class="counters" data-count="40000.00">$400.00</span></h5>
									<p class="mb-0">Total Expense Amount</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count bg-primary">
							<div class="dash-counts">
								<h4 class="mb-1">100</h4>
								<p class="text-white mb-0">Customers</p>
							</div>
							<div class="dash-imgs">
								<i data-feather="user"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das1 bg-cyan-900">
							<div class="dash-counts">
								<h4 class="mb-1">110</h4>
								<p class="text-white mb-0">Suppliers</p>
							</div>
							<div class="dash-imgs">
								<i data-feather="user-check"></i>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das2 bg-dark">
							<div class="dash-counts">
								<h4 class="mb-1">150</h4>
								<p class="text-white mb-0">Purchase Invoice</p>
							</div>
							<div class="dash-imgs">
								<img src="assets/img/icons/file-text-icon-01.svg" class="img-fluid" alt="icon">
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12 d-flex">
						<div class="dash-count das3 bg-success">
							<div class="dash-counts">
								<h4 class="mb-1">170</h4>
								<p class="text-white mb-0">Sales Invoice</p>
							</div>
							<div class="dash-imgs">
								<i data-feather="file"></i>
							</div>
						</div>
					</div>
				</div>
				<!-- Button trigger modal -->

				<div class="row">
					<div class="col-xl-7 col-sm-12 col-12 d-flex">
						<div class="card flex-fill">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h5 class="card-title mb-0">Purchase & Sales</h5>
								<div class="graph-sets">
									<ul class="mb-0">
										<li>
											<span>Sales</span>
										</li>
										<li>
											<span>Purchase</span>
										</li>
									</ul>
									<div class="dropdown">
										<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white"  data-bs-toggle="dropdown" aria-expanded="false">
											2025
										</a>
										<ul class="dropdown-menu p-3">
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2025</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2022</a>
											</li>
											<li>
												<a href="javascript:void(0);" class="dropdown-item">2021</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="card-body pb-0">
								<div id="sales_charts"></div>
							</div>
						</div>
					</div>

					<!-- Recent Products -->
					<div class="col-xl-5 col-sm-12 col-12 d-flex">
						<div class="card flex-fill default-cover mb-4">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h4 class="card-title mb-0">Recently Added Products</h4>
								<a href="product-list.html" class="fs-13 fw-medium text-decoration-underline">View All</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive dataview">
									<table class="table dashboard-recent-products">
										<thead class="thead-light">
											<tr>
												<th>#</th>
												<th>Products</th>
												<th>Price</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="product-list.html" class="avatar avatar-lg me-3">
															<img src="assets/img/products/stock-img-01.png" alt="img">
														</a>
														<div>
															<h6><a href="product-list.html" class="fw-bold">Lenevo 3rd Generation</a></h6>
														</div>
													</div>
												</td>
												<td>$12500</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="product-list.html" class="avatar avatar-lg me-3">
															<img src="assets/img/products/stock-img-06.png" alt="img">
														</a>
														<div>
															<h6><a href="product-list.html" class="fw-bold">Bold V3.2</a></h6>
														</div>
													</div>
												</td>
												<td>$1600</td>
											</tr>
											<tr>
												<td>3</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="product-list.html" class="avatar avatar-lg me-3">
															<img src="assets/img/products/stock-img-02.png" alt="img">
														</a>
														<div>
															<h6><a href="product-list.html" class="fw-bold">Nike Jordan</a></h6>
														</div>
													</div>
												</td>
												<td>$2000</td>
											</tr>
											<tr>
												<td>4</td>
												<td>
													<div class="d-flex align-items-center">
														<a href="product-list.html" class="avatar avatar-lg me-3">
															<img src="assets/img/products/stock-img-03.png" alt="img">
														</a>
														<div>
															<h6><a href="product-list.html" class="fw-bold">Apple Series 5 Watch</a></h6>
														</div>
													</div>
												</td>
												<td>$800</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- /Recent Products -->

				</div>

				<!-- Expired Products -->
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h4 class="card-title">Expired Products</h4>
						<div class="view-all-link">
							<a href="expired-products.html" class="fs-13 fw-medium text-decoration-underline">View All</a>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="table-responsive dataview">
							<table class="table dashboard-expired-products">
								<thead class="thead-light">
									<tr>
										<th class="no-sort">
											<label class="checkboxs">
												<input type="checkbox" id="select-all">
												<span class="checkmarks"></span>
											</label>
										</th>
										<th>Product</th>
										<th>SKU</th>
										<th>Manufactured Date</th>
										<th>Expired Date</th>
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-lg me-2">
													<img src="assets/img/products/expire-product-01.png" alt="img">
												</a>
												<div>
													<h6><a href="javascript:void(0);" class="fw-bold">Red Premium Handy</a></h6>
												</div>
											</div>
										</td>
										<td>PT006</td>
										<td>17 Jan 2023</td>
										<td>29 Mar 2023</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class="p-2" href="javascript:void(0);">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-lg me-2">
													<img src="assets/img/products/expire-product-02.png" alt="img">
												</a>
												<div>
													<h6><a href="javascript:void(0);" class="fw-bold">Iphone 14 Pro</a></h6>
												</div>
											</div>
										</td>
										<td>PT007</td>
										<td>22 Feb 2023</td>
										<td>04 Apr 2023</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class="p-2" href="javascript:void(0);">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-lg me-2">
													<img src="assets/img/products/expire-product-03.png" alt="img">
												</a>
												<div>
													<h6><a href="javascript:void(0);" class="fw-bold">Black Slim 200</a></h6>
												</div>
											</div>
										</td>
										<td>PT008</td>
										<td>18 Mar 2023</td>
										<td>13 May 2023</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class="p-2" href="javascript:void(0);">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-lg me-2">
													<img src="assets/img/products/expire-product-04.png" alt="img">
												</a>
												<div>
													<h6><a href="javascript:void(0);" class="fw-bold">Woodcraft Sandal</a></h6>
												</div>
											</div>
										</td>
										<td>PT009</td>
										<td>29 Mar 2023</td>
										<td>27 May 2023</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class="p-2" href="javascript:void(0);">
													<i data-feather="trash-2" class="feather-trash-2"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<label class="checkboxs">
												<input type="checkbox">
												<span class="checkmarks"></span>
											</label>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-lg me-2">
													<img src="assets/img/products/stock-img-03.png" alt="img">
												</a>
												<div>
													<h6><a href="javascript:void(0);" class="fw-bold">Apple Series 5 Watch</a></h6>
												</div>
											</div>
										</td>
										<td>PT010</td>
										<td>24 Mar 2023</td>
										<td>26 May 2023</td>
										<td class="action-table-data">
											<div class="edit-delete-action">
												<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-units">
													<i data-feather="edit" class="feather-edit"></i>
												</a>
												<a class="p-2" href="javascript:void(0);">
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
				<!-- /Expired Products -->

			</div>
			
			<div class="copyright-footer d-flex align-items-center justify-content-between border-top bg-white gap-3 flex-wrap">
				<p class="fs-13 text-gray-9 mb-0">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
				<p>Designed & Developed By <a href="javascript:void(0);" class="link-primary">Dreams</a></p>
			</div>
		</div>

	</div>
	<!-- /Main Wrapper -->
@endsection