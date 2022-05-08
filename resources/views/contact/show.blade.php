@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-12">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table-info">
                        <th colspan="2" scope="col">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"><b>email:</b> <a href="mailto:dbzmonty@gmail.com">dbzmonty [at] gmail [dot] com</a></th>
                        <td rowspan="3">
                            <img src="https://media.icdn.hu/content/entity/2022/01/64480/61d2c5928629fcyberpunkkeanu.jpg"
                                class="rounded mx-auto d-block"
                                alt="Andras Dobozi"
                                width="640"
                                height="360">
                        </td>
                    </tr>
                    <tr>
                        <td scope="row"><b>github:</b> <a href="https://github.com/dbzmonty" target="_blank">github.com/dbzmonty</a></th>
                    </tr>
                    <tr>
                        <td scope="row"><b>LinkedIn:</b> <a href="https://www.linkedin.com/in/andras-dobozi/" target="_blank">Andras Dobozi</a></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection