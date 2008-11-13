<?php defined('_JEXEC') or die('Restricted access'); ?>
		<div class="imgOutline">
			<div class="imgTotal">
				<div align="center" class="imgBorder">
					<a class="img-preview" href="<?php echo COM_MEDIA_BASEURL.'/'.$this->_tmp_img->path_relative; ?>" title="<?php echo $this->_tmp_img->name; ?>" style="display: block; width: 100%; height: 100%">
						<span class="image">
							<img src="<?php echo COM_MEDIA_BASEURL.'/'.$this->_tmp_img->path_relative; ?>" width="<?php echo $this->_tmp_img->width_60; ?>" height="<?php echo $this->_tmp_img->height_60; ?>" alt="<?php echo $this->_tmp_img->name; ?> - <?php echo MediaHelper::parseSize($this->_tmp_img->size); ?>" border="0" />
						</span></a>
				</div>
			</div>
			<div class="controls">
				<a class="delete-item" href="<?php echo JRoute::_('index.php?option=com_media&amp;task=file.delete&amp;tmpl=component&amp;folder=' . $this->state->folder . '&amp;rm[]=' . $this->_tmp_img->name); ?>" rel="<?php echo $this->_tmp_img->name; ?>"><img src="components/com_media/images/remove.png" width="16" height="16" border="0" alt="<?php echo JText::_( 'Delete' ); ?>" /></a>
				<input type="checkbox" name="rm[]" value="<?php echo $this->_tmp_img->name; ?>" />
			</div>
			<div class="imginfoBorder">
				<a href="<?php echo COM_MEDIA_BASEURL.'/'.$this->_tmp_img->path_relative; ?>" class="preview"><?php echo $this->escape( substr( $this->_tmp_img->name, 0, 10 ) . ( strlen( $this->_tmp_img->name ) > 10 ? '...' : '')); ?></a>
			</div>
		</div>
