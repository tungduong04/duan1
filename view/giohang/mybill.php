<div class="row mb">
            <div class="boxtrai mr">
                <div class=" row mb chitietsanpham formdn">
                    <div class=" row mb chitietsanpham formdn">
                        <div class="tieude mb10">ĐƠN HÀNG CỦA BẠN</div>
                        <div class="row formLH">
                            <div class="row mb10 formDSLH">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>MÃ ĐƠN HÀNG</th>
                                            <th>NGÀY ĐẶT</th>
                                            <th>SỐ LƯỢNG MẶT HÀNG</th>
                                            <th>TỔNG GIÁ TRỊ MẶT HÀNG</th>
                                            <th>TÌNH TRẠNG</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($mybill)){ ?>
                                            <?php $tong = 0; $i=0; ?>
                                            <?php foreach($mybill as $b): ?>
                                            <?php $ttdh = get_ttdh($b['status']); ?>
                                            <?php $count = loadall_giohang_count($b['id']) ?>
                                            <tr>
                                                <td><?php echo ($i+1) ?></td>
                                                <td><?php echo $b['id'] ?></td>
                                                <td><?php echo $b['date'] ?></td>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $b['total'] ?></td>
                                                <td><?php echo $ttdh ?></td>
                                            </tr>
                                            <?php $i+=1; ?>
                                            <?php endforeach; ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>               
            </div>
            <div class="boxphai">
                <?php include "view/boxphai.php" ?>
            </div>
</div>