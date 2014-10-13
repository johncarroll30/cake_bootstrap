<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ltf'); ?></dt>
		<dd>
			<?php echo h($category['Category']['ltf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($category['Category']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), null, __('Are you sure you want to delete # %s?', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listings'), array('controller' => 'listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Categories'); ?></h3>
	<?php if (!empty($category['ChildCategory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Ltf'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['ChildCategory'] as $childCategory): ?>
		<tr>
			<td><?php echo $childCategory['id']; ?></td>
			<td><?php echo $childCategory['parent_id']; ?></td>
			<td><?php echo $childCategory['ltf']; ?></td>
			<td><?php echo $childCategory['rght']; ?></td>
			<td><?php echo $childCategory['name']; ?></td>
			<td><?php echo $childCategory['created']; ?></td>
			<td><?php echo $childCategory['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categories', 'action' => 'view', $childCategory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categories', 'action' => 'edit', $childCategory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categories', 'action' => 'delete', $childCategory['id']), null, __('Are you sure you want to delete # %s?', $childCategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Listings'); ?></h3>
	<?php if (!empty($category['Listing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Listing Type Id'); ?></th>
		<th><?php echo __('Property Type Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Currency Id'); ?></th>
		<th><?php echo __('Price Low'); ?></th>
		<th><?php echo __('Price High'); ?></th>
		<th><?php echo __('Sleeps'); ?></th>
		<th><?php echo __('Terms'); ?></th>
		<th><?php echo __('No Single Bedrooms'); ?></th>
		<th><?php echo __('No Twin Bedrooms'); ?></th>
		<th><?php echo __('No Double Bedrooms'); ?></th>
		<th><?php echo __('Features'); ?></th>
		<th><?php echo __('No Bathrooms'); ?></th>
		<th><?php echo __('No Ensuite Rooms'); ?></th>
		<th><?php echo __('No Showers'); ?></th>
		<th><?php echo __('No Kitchens'); ?></th>
		<th><?php echo __('Swimming Pool'); ?></th>
		<th><?php echo __('Type Of Hob'); ?></th>
		<th><?php echo __('Type Of Oven'); ?></th>
		<th><?php echo __('Dishwasher'); ?></th>
		<th><?php echo __('Washing Machine'); ?></th>
		<th><?php echo __('Microwave'); ?></th>
		<th><?php echo __('Fridge'); ?></th>
		<th><?php echo __('Tv'); ?></th>
		<th><?php echo __('Dvd'); ?></th>
		<th><?php echo __('Radio'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Is Featured'); ?></th>
		<th><?php echo __('Featured Expiry'); ?></th>
		<th><?php echo __('Image 1'); ?></th>
		<th><?php echo __('Image 2'); ?></th>
		<th><?php echo __('Image 3'); ?></th>
		<th><?php echo __('Image 4'); ?></th>
		<th><?php echo __('Image 5'); ?></th>
		<th><?php echo __('Image 6'); ?></th>
		<th><?php echo __('Image 7'); ?></th>
		<th><?php echo __('Image 8'); ?></th>
		<th><?php echo __('Image 9'); ?></th>
		<th><?php echo __('Image 10'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Listing'] as $listing): ?>
		<tr>
			<td><?php echo $listing['id']; ?></td>
			<td><?php echo $listing['user_id']; ?></td>
			<td><?php echo $listing['category_id']; ?></td>
			<td><?php echo $listing['listing_type_id']; ?></td>
			<td><?php echo $listing['property_type_id']; ?></td>
			<td><?php echo $listing['contact_id']; ?></td>
			<td><?php echo $listing['title']; ?></td>
			<td><?php echo $listing['description']; ?></td>
			<td><?php echo $listing['currency_id']; ?></td>
			<td><?php echo $listing['price_low']; ?></td>
			<td><?php echo $listing['price_high']; ?></td>
			<td><?php echo $listing['sleeps']; ?></td>
			<td><?php echo $listing['terms']; ?></td>
			<td><?php echo $listing['no_single_bedrooms']; ?></td>
			<td><?php echo $listing['no_twin_bedrooms']; ?></td>
			<td><?php echo $listing['no_double_bedrooms']; ?></td>
			<td><?php echo $listing['features']; ?></td>
			<td><?php echo $listing['no_bathrooms']; ?></td>
			<td><?php echo $listing['no_ensuite_rooms']; ?></td>
			<td><?php echo $listing['no_showers']; ?></td>
			<td><?php echo $listing['no_kitchens']; ?></td>
			<td><?php echo $listing['swimming_pool']; ?></td>
			<td><?php echo $listing['type_of_hob']; ?></td>
			<td><?php echo $listing['type_of_oven']; ?></td>
			<td><?php echo $listing['dishwasher']; ?></td>
			<td><?php echo $listing['washing_machine']; ?></td>
			<td><?php echo $listing['microwave']; ?></td>
			<td><?php echo $listing['fridge']; ?></td>
			<td><?php echo $listing['tv']; ?></td>
			<td><?php echo $listing['dvd']; ?></td>
			<td><?php echo $listing['radio']; ?></td>
			<td><?php echo $listing['telephone']; ?></td>
			<td><?php echo $listing['is_featured']; ?></td>
			<td><?php echo $listing['featured_expiry']; ?></td>
			<td><?php echo $listing['image_1']; ?></td>
			<td><?php echo $listing['image_2']; ?></td>
			<td><?php echo $listing['image_3']; ?></td>
			<td><?php echo $listing['image_4']; ?></td>
			<td><?php echo $listing['image_5']; ?></td>
			<td><?php echo $listing['image_6']; ?></td>
			<td><?php echo $listing['image_7']; ?></td>
			<td><?php echo $listing['image_8']; ?></td>
			<td><?php echo $listing['image_9']; ?></td>
			<td><?php echo $listing['image_10']; ?></td>
			<td><?php echo $listing['created']; ?></td>
			<td><?php echo $listing['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'listings', 'action' => 'view', $listing['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'listings', 'action' => 'edit', $listing['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'listings', 'action' => 'delete', $listing['id']), null, __('Are you sure you want to delete # %s?', $listing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
