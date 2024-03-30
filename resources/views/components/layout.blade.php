<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Snowfinch Registration</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

    <link href="{{asset('style.css')}}" rel="stylesheet" />

    <style type="text/css">
      label {
        font-size: 0.9rem;
        font-weight: 600;
      }
      .form-control,
      .form-select {
        padding: 0.18rem 0.75rem !important;
        margin-bottom: 3%;
        font-size: 0.9rem;
      }
      h6 {
        font-weight: 600;
      }
    </style>
  </head>

  <body>
    <section>
        <div class="container bg-dark text-white p-3">
            {{$slot}}
          </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
