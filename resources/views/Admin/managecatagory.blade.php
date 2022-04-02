@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')


        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <h1>Manage Catagory</h1>
            <div class="row d-flex justify-content-between p-2 ">
                <input class="form-control col-lg-4" id="myInput" type="text" placeholder="Search..">
                <a href="{{route('addcatagory')}}"><button class="btn bg-info"><i class="fas fa-plus-circle"></i> Add catagory</button></a>
            </div>
            <table class="table table-white   table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Catagory Name</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">1</label>
                            </div>
                        </td>
                        <td>Fashion</td>
                        <td>Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>


                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">2</label>
                            </div>
                        </td>
                        <td>Gadget</td>
                        <td>Inactive </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">3</label>
                            </div>
                        </td>
                        <td>T-shirt</td>
                        <td>
                            Active
                        </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">4</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td> <span>Inactive</span> </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">5</label>
                            </div>
                        </td>
                        <td>Desktop</td>
                        <td> Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">6</label>
                            </div>
                        </td>
                        <td>AC</td>
                        <td>
                            Inactive
                        </td>
                        <td>
                            <button class="btn btn-warning" type="submit">Inactive</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">7</label>
                            </div>
                        </td>
                        <td>Laptop</td>
                        <td> Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">8</label>
                            </div>
                        </td>
                        <td>Washing-machine</td>
                        <td> Inactive </td>
                        <td>
                            <button class="btn btn-warning" type="submit">Inactive</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">9</label>
                            </div>
                        </td>
                        <td>Mobile-phone</td>
                        <td> Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">10</label>
                            </div>
                        </td>
                        <td>Refrigerator</td>
                        <td>Inactive </td>
                        <td><button class="btn btn-warning" type="submit">Inactive</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10">11</label>
                            </div>
                        </td>
                        <td>Shoes</td>
                        <td>
                            Active
                        </td>
                        <td>
                            <button class="btn btn-primary bg-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-primary bg-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11">12</label>
                        </div>
                    </td>
                    <td>Tv</td>
                    <td>Active </td>
                    <td><button class="btn btn-success" type="submit">Active</button>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
 




@endsection
