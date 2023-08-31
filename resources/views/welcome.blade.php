<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container py-3">
            <header>
              <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
                  <span class="fs-4">Pricing example</span>
                </a>
          
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                  <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Features</a>
                  <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Enterprise</a>
                  <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Support</a>
                  <a class="py-2 link-body-emphasis text-decoration-none" href="#">Pricing</a>
                </nav>
              </div>
          
              <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
                <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
              </div>
            </header>
          
            <main>
              <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Free</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm border-primary">
                    <div class="card-header py-3 text-bg-primary border-primary">
                      <h4 class="my-0 fw-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                      </ul>
                      <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                    </div>
                  </div>
                </div>
              </div>
          
              <h2 class="display-6 text-center mb-4">Compare plans</h2>
          
              <div class="table-responsive">
                <table class="table text-center">
                  <thead>
                    <tr>
                      <th style="width: 34%;"></th>
                      <th style="width: 22%;">Free</th>
                      <th style="width: 22%;">Pro</th>
                      <th style="width: 22%;">Enterprise</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row" class="text-start">Public</th>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-start">Private</th>
                      <td></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    </tr>
                  </tbody>
          
                  <tbody>
                    <tr>
                      <th scope="row" class="text-start">Permissions</th>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-start">Sharing</th>
                      <td></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-start">Unlimited members</th>
                      <td></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    </tr>
                    <tr>
                      <th scope="row" class="text-start">Extra security</th>
                      <td></td>
                      <td></td>
                      <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </main>
          
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
              <div class="row">
                <div class="col-12 col-md">
                  <img class="mb-2" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
                  <small class="d-block mb-3 text-body-secondary">&copy; 2017–2023</small>
                </div>
                <div class="col-6 col-md">
                  <h5>Features</h5>
                  <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md">
                  <h5>Resources</h5>
                  <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md">
                  <h5>About</h5>
                  <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                  </ul>
                </div>
              </div>
            </footer>
    </body>
</html>
