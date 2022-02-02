@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3> Catagories </h3>
        </div>
        <div class="card-body d-flex justify-content-between ">
            <div class="col-lg-3">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control form-control-md" id="exampleInputEmail1"
                            placeholder="Catagory Name">

                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Parent Catagory</label>
                        <select class="form-control form-control-md">
                            <option>Fashion</option>
                            <option>Gadget</option>
                            <option>T-shirt</option>
                            <option>E-electronic</option>
                            <option>Desktop </option>
                            <option>Ac</option>
                            <option>Laptop</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="d-block form-control" name="description" id="" cols="38" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Add New Catagory</button>
                </form>
            </div>

            <div class="card col-lg-8 ">
                <div class="card-header card-title">
                    <h3>Catagory List</h3>
                </div>


                <!-- /.card-header -->
                <div class="">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-info">ID</th>
                                <th class="text-info">Caragory Name</th>
                                <th class="text-info">Description</th>
                                <th class="text-info">Status</th>
                                <th class="text-info">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    Fashion
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td>
                                <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Gadget
                                </td>
                                <td class="text-center">--------</td>
                                <td>Active</td>
                                <td> <button class="btn btn-warning" type="submit"><i class="fas fa-ban"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    T-shirt
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    E-electronic
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    Desktop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    Ac
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Active</td>
                                <td> <button class="btn btn-warning" type="submit"><i class="fas fa-ban"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>9</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button></td>

                            </tr>
                            <tr>
                                <td>10</td>
                                <td>
                                    Laptop
                                </td>
                                <td class="text-center">--------</td>
                                <td>Inactive</td>
                                <td> <button class="btn btn-success" type="submit"><i
                                            class="far fa-check-circle"></i></button>
                                    <button class="btn btn-primary" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>




</div>




@endsection
