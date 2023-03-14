<?php while ( have_posts() ) : the_post(); ?>
	<?php $right_custom_sidebar = get_field('block_right_sidebar', get_the_ID()); ?>
	<?php if(!empty($right_custom_sidebar)) { ?>
		<?php if(get_the_content()) {the_content();} else {
			the_post_thumbnail('original');
		}; ?>
	<?php } ?>
	<?php if(empty($right_custom_sidebar)) { ?>
		<?php $han_ung_tuyen = get_field('han_ung_tuyen', get_the_ID());
				$dia_diem_lam_viec = get_field('dia_diem_lam_viec', get_the_ID());
				$muc_luong = get_field('muc_luong', get_the_ID());
				$mo_ta_cong_viec = get_field('mo_ta_cong_viec', get_the_ID());
				$yeu_cau_cong_viec = get_field('yeu_cau_cong_viec', get_the_ID());
				$quyen_loi = get_field('quyen_loi', get_the_ID());
		?>
		<div><h4 style="color:#0055A4; font-weight: bold">Hạn ứng tuyển: <span style="color: #000000;"><?php echo $han_ung_tuyen ?></span></h4></div>
		<div><h4 style="color:#0055A4; font-weight: bold">Địa điểm làm việc: <span  style="color: #000000; font-weight:normal;"><?php echo $dia_diem_lam_viec ?></span></h4></div>
		<div><h4 style="color:#0055A4; font-weight: bold">Mức lương:  <span style="color: #000000;"><?php echo $muc_luong ?></span></h4></div>
		<div style="margin-top:2rem;"><h4 style="color:#0055A4; font-weight: bold">MÔ TẢ CÔNG VIỆC: </h4>
			<div style="margin-left: 1rem;"><?php echo $mo_ta_cong_viec ?></div>
		</div>
		<div style="margin-top:2rem;"><h4 style="color:#0055A4; font-weight: bold">YÊU CẦU CÔNG VIỆC: </h4>
			<div style="margin-left: 1rem;"><?php echo $yeu_cau_cong_viec ?></div>
		</div>
		<div style="margin-top:2rem;"><h4 style="color:#0055A4; font-weight: bold">QUYỂN LỢI: </h4>
			<div style="margin-left: 1rem;"><?php echo $quyen_loi ?></div>
		</div>
	<?php } ?>
<?php endwhile; wp_reset_query(); // end of the loop. ?>
