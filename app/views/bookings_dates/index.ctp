<div class="bookingsDates index">
	<table cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th>Date</th>
				<th>Location</th>
				<th>Venue</th>
				<th class="tickets">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach ( $bookingsDates as $bookingDate )
		{
			$tickets_url = null;
			
			if ( !empty($bookingDate['BookingsDate']['tickets_url']) )
			{
				$tickets_url = $this->Html->link('Tickets', $bookingDate['BookingsDate']['tickets_url'], array('target' => '_blank'));
			}
			
			?>
			<tr>
				<td><?=$this->Time->format('d/m/Y', $bookingDate['BookingsDate']['date'])?></td>
				<td><?=$bookingDate['BookingsDate']['location']?></td>
				<td><?=$bookingDate['BookingsDate']['venue']?></td>
				<td class="tickets"><?=$tickets_url?></td>
			</tr>
			<?php
		}
		?>
		</tbody>
	</table>
</div>