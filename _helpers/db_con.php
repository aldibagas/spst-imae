<?php
$conn = mysqli_connect('localhost', 'cypr9718', 'pq6SPaHWYiKe38', 'cypr9718_spst');

if (mysqli_connect_errno()){
    echo "DATABASE ERROR : " . mysqli_connect_error();
}