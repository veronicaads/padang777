<html>

<head>
    <?php
echo $js; echo $css;
?>
</head>

<body>
    <div class="container">
        <?php echo $navigation;?>
        <br>
        <div class="row">
            <?php foreach ($cart as $row) {	?>
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <div class="my-list">
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#">
                                            <img style="width:100px; height:100px;"  src="<?php echo base_url();?><?php echo $row['Gambar'];?>" alt="dsadas" /> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <br>
                                                <?php echo $row['NamaMenu']; ?>
                                            </h4>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="3">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center">
                                    <?php $harga = sprintf('%0.3f',$row['Harga']/1000); ?>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center">
                                    <strong>$14.61</strong>
                                </td>
                                <td class="col-sm-1 col-md-1">
                                    <button type="button" class="btn btn-danger">
                                        <span class="fa fa-remove"></span> Remove
                                    </button>
                                </td>
                            </div>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td class="text-right">
                                <h5>
                                    <strong>$24.59</strong>
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h5>Estimated shipping</h5>
                            </td>
                            <td class="text-right">
                                <h5>
                                    <strong>$6.94</strong>
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td class="text-right">
                                <h4>
                                    <strong>$31.53</strong>
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <button type="button" class="btn btn-default">
                                    <span class="fa fa-shopping-cart"></span> Continue Shopping
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success">
                                    Checkout
                                    <span class="fa fa-play"></span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php echo $footer; ?>
</body>

</html>