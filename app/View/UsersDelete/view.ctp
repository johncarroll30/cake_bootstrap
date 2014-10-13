<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address1'); ?></dt>
		<dd>
			<?php echo h($user['User']['address1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address2'); ?></dt>
		<dd>
			<?php echo h($user['User']['address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address3'); ?></dt>
		<dd>
			<?php echo h($user['User']['address3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postcode'); ?></dt>
		<dd>
			<?php echo h($user['User']['postcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($user['User']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmation'); ?></dt>
		<dd>
			<?php echo h($user['User']['confirmation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born'); ?></dt>
		<dd>
			<?php echo h($user['User']['born']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($user['User']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($user['User']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($user['User']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marketing'); ?></dt>
		<dd>
			<?php echo h($user['User']['marketing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['ip_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($user['User']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Contact Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['primary_contact_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Contact Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['primary_contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Contact Notes'); ?></dt>
		<dd>
			<?php echo h($user['User']['primary_contact_notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Contact Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['secondary_contact_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Contact Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['secondary_contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Secondary Contact Notes'); ?></dt>
		<dd>
			<?php echo h($user['User']['secondary_contact_notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sms'); ?></dt>
		<dd>
			<?php echo h($user['User']['sms']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Enquiries'), array('controller' => 'enquiries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Enquiry'), array('controller' => 'enquiries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Listings'), array('controller' => 'listings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Listing'), array('controller' => 'listings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contacts'); ?></h3>
	<?php if (!empty($user['Contact'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Address1'); ?></th>
		<th><?php echo __('Address2'); ?></th>
		<th><?php echo __('Address3'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Postcode'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['id']; ?></td>
			<td><?php echo $contact['user_id']; ?></td>
			<td><?php echo $contact['firstname']; ?></td>
			<td><?php echo $contact['lastname']; ?></td>
			<td><?php echo $contact['address1']; ?></td>
			<td><?php echo $contact['address2']; ?></td>
			<td><?php echo $contact['address3']; ?></td>
			<td><?php echo $contact['city']; ?></td>
			<td><?php echo $contact['postcode']; ?></td>
			<td><?php echo $contact['country']; ?></td>
			<td><?php echo $contact['phone']; ?></td>
			<td><?php echo $contact['mobile']; ?></td>
			<td><?php echo $contact['email']; ?></td>
			<td><?php echo $contact['website']; ?></td>
			<td><?php echo $contact['created']; ?></td>
			<td><?php echo $contact['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Enquiries'); ?></h3>
	<?php if (!empty($user['Enquiry'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Listing Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Arrival'); ?></th>
		<th><?php echo __('Duration Start'); ?></th>
		<th><?php echo __('Duration End'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Read'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Enquiry'] as $enquiry): ?>
		<tr>
			<td><?php echo $enquiry['id']; ?></td>
			<td><?php echo $enquiry['listing_id']; ?></td>
			<td><?php echo $enquiry['user_id']; ?></td>
			<td><?php echo $enquiry['arrival']; ?></td>
			<td><?php echo $enquiry['duration_start']; ?></td>
			<td><?php echo $enquiry['duration_end']; ?></td>
			<td><?php echo $enquiry['comment']; ?></td>
			<td><?php echo $enquiry['read']; ?></td>
			<td><?php echo $enquiry['created']; ?></td>
			<td><?php echo $enquiry['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'enquiries', 'action' => 'view', $enquiry['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'enquiries', 'action' => 'edit', $enquiry['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'enquiries', 'action' => 'delete', $enquiry['id']), null, __('Are you sure you want to delete # %s?', $enquiry['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Enquiry'), array('controller' => 'enquiries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Listings'); ?></h3>
	<?php if (!empty($user['Listing'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Listing Type Id'); ?></th>
		<th><?php echo __('Property Type Id'); ?></th>
		<th><?php echo __('Contact Id'); ?></th>
		<th><?php echo __('Currency Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Price Low'); ?></th>
		<th><?php echo __('Price High'); ?></th>
		<th><?php echo __('Sleeps'); ?></th>
		<th><?php echo __('Bedrooms'); ?></th>
		<th><?php echo __('Is Featured'); ?></th>
		<th><?php echo __('Featured Expiry'); ?></th>
		<th><?php echo __('No Single Bedrooms'); ?></th>
		<th><?php echo __('No Twin Bedrooms'); ?></th>
		<th><?php echo __('No Double Bedrooms'); ?></th>
		<th><?php echo __('No Bathrooms'); ?></th>
		<th><?php echo __('No Ensuite Rooms'); ?></th>
		<th><?php echo __('No Showers'); ?></th>
		<th><?php echo __('No Baths'); ?></th>
		<th><?php echo __('Has Pool'); ?></th>
		<th><?php echo __('Has Hob'); ?></th>
		<th><?php echo __('Has Oven'); ?></th>
		<th><?php echo __('Has Dishwasher'); ?></th>
		<th><?php echo __('Has Washing Machine'); ?></th>
		<th><?php echo __('Has Microwave'); ?></th>
		<th><?php echo __('Has Fridge'); ?></th>
		<th><?php echo __('Has Freezer'); ?></th>
		<th><?php echo __('Has Dvd'); ?></th>
		<th><?php echo __('Has Radio'); ?></th>
		<th><?php echo __('Has Telephone'); ?></th>
		<th><?php echo __('Has Ironing Board'); ?></th>
		<th><?php echo __('Has Iron'); ?></th>
		<th><?php echo __('Has Tv'); ?></th>
		<th><?php echo __('Has Cable'); ?></th>
		<th><?php echo __('Has Parking'); ?></th>
		<th><?php echo __('Has Dryer'); ?></th>
		<th><?php echo __('Has Internet'); ?></th>
		<th><?php echo __('Has Aircon'); ?></th>
		<th><?php echo __('Has Cot'); ?></th>
		<th><?php echo __('Has Highchair'); ?></th>
		<th><?php echo __('Has Safe'); ?></th>
		<th><?php echo __('Notes Bedrooms'); ?></th>
		<th><?php echo __('Notes Bathrooms'); ?></th>
		<th><?php echo __('Notes Kitchen'); ?></th>
		<th><?php echo __('Notes Utility Room'); ?></th>
		<th><?php echo __('Notes Living Rooms'); ?></th>
		<th><?php echo __('Notes Services'); ?></th>
		<th><?php echo __('Notes Amenities Facilities'); ?></th>
		<th><?php echo __('Notes Outside'); ?></th>
		<th><?php echo __('Notes Surcharge'); ?></th>
		<th><?php echo __('Notes Prices'); ?></th>
		<th><?php echo __('Notes Changeover Day'); ?></th>
		<th><?php echo __('Notes Booking'); ?></th>
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
		<th><?php echo __('Lat'); ?></th>
		<th><?php echo __('Lng'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Listing'] as $listing): ?>
		<tr>
			<td><?php echo $listing['id']; ?></td>
			<td><?php echo $listing['user_id']; ?></td>
			<td><?php echo $listing['location_id']; ?></td>
			<td><?php echo $listing['listing_type_id']; ?></td>
			<td><?php echo $listing['property_type_id']; ?></td>
			<td><?php echo $listing['contact_id']; ?></td>
			<td><?php echo $listing['currency_id']; ?></td>
			<td><?php echo $listing['title']; ?></td>
			<td><?php echo $listing['description']; ?></td>
			<td><?php echo $listing['price_low']; ?></td>
			<td><?php echo $listing['price_high']; ?></td>
			<td><?php echo $listing['sleeps']; ?></td>
			<td><?php echo $listing['bedrooms']; ?></td>
			<td><?php echo $listing['is_featured']; ?></td>
			<td><?php echo $listing['featured_expiry']; ?></td>
			<td><?php echo $listing['no_single_bedrooms']; ?></td>
			<td><?php echo $listing['no_twin_bedrooms']; ?></td>
			<td><?php echo $listing['no_double_bedrooms']; ?></td>
			<td><?php echo $listing['no_bathrooms']; ?></td>
			<td><?php echo $listing['no_ensuite_rooms']; ?></td>
			<td><?php echo $listing['no_showers']; ?></td>
			<td><?php echo $listing['no_baths']; ?></td>
			<td><?php echo $listing['has_pool']; ?></td>
			<td><?php echo $listing['has_hob']; ?></td>
			<td><?php echo $listing['has_oven']; ?></td>
			<td><?php echo $listing['has_dishwasher']; ?></td>
			<td><?php echo $listing['has_washing_machine']; ?></td>
			<td><?php echo $listing['has_microwave']; ?></td>
			<td><?php echo $listing['has_fridge']; ?></td>
			<td><?php echo $listing['has_freezer']; ?></td>
			<td><?php echo $listing['has_dvd']; ?></td>
			<td><?php echo $listing['has_radio']; ?></td>
			<td><?php echo $listing['has_telephone']; ?></td>
			<td><?php echo $listing['has_ironing_board']; ?></td>
			<td><?php echo $listing['has_iron']; ?></td>
			<td><?php echo $listing['has_tv']; ?></td>
			<td><?php echo $listing['has_cable']; ?></td>
			<td><?php echo $listing['has_parking']; ?></td>
			<td><?php echo $listing['has_dryer']; ?></td>
			<td><?php echo $listing['has_internet']; ?></td>
			<td><?php echo $listing['has_aircon']; ?></td>
			<td><?php echo $listing['has_cot']; ?></td>
			<td><?php echo $listing['has_highchair']; ?></td>
			<td><?php echo $listing['has_safe']; ?></td>
			<td><?php echo $listing['notes_bedrooms']; ?></td>
			<td><?php echo $listing['notes_bathrooms']; ?></td>
			<td><?php echo $listing['notes_kitchen']; ?></td>
			<td><?php echo $listing['notes_utility_room']; ?></td>
			<td><?php echo $listing['notes_living_rooms']; ?></td>
			<td><?php echo $listing['notes_services']; ?></td>
			<td><?php echo $listing['notes_amenities_facilities']; ?></td>
			<td><?php echo $listing['notes_outside']; ?></td>
			<td><?php echo $listing['notes_surcharge']; ?></td>
			<td><?php echo $listing['notes_prices']; ?></td>
			<td><?php echo $listing['notes_changeover_day']; ?></td>
			<td><?php echo $listing['notes_booking']; ?></td>
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
			<td><?php echo $listing['lat']; ?></td>
			<td><?php echo $listing['lng']; ?></td>
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
