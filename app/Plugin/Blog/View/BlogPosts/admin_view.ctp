<div class="blogPosts view">
	<div class="row">
		<div class="col-lg-8">
			<h3><?php  echo __('Blog Post');?></h3>
			<div class="table-responsive">
				<table class="table table-bordered table-hover table-striped tablesorter">
					<tbody>
						<tr>
							<td><b><?php echo __('Id'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['id']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Title'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['title']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Slug'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['slug']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Summary'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['summary']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Content'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['body']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Sticky'); ?></b></td>
							<td>
								<?php if(h($blogPost['BlogPost']['sticky'])==1) { echo "yes"; } else { echo "no"; }; ?>
								&nbsp;
							</td>
						</tr>
						<!--<tr>
							<td><b><?php echo __('In Rss'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['in_rss']); ?>
								&nbsp;
							</td>
						</tr>-->
						<tr>
							<td><b><?php echo __('Meta Title'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['meta_title']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Meta Description'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['meta_description']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Meta Keywords'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['meta_keywords']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Published'); ?></b></td>
							<td>
								<?php if(h($blogPost['BlogPost']['published'])==1) { echo "yes"; } else { echo "no"; }; ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Created'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['created']); ?>
								&nbsp;
							</td>
						</tr>
						<tr>
							<td><b><?php echo __('Modified'); ?></b></td>
							<td>
								<?php echo h($blogPost['BlogPost']['modified']); ?>
								&nbsp;
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>