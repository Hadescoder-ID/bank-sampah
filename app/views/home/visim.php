<h1 align="center">Visi Misi Bank Sampah</h1>

<section id="vimi">
		    <table align="center"
		style="table-layout: fixed; 
				width: 80%; 
				background-color: #f2f2f2 ;
				">
				<tr>
				<td align="center"><p>Visi</p></td>
				<td align="center"><p>Misi</p></td>
			</tr>
				<tr>
				<?php
                        foreach ($data['visi'] as $visi) : ?>
                        	<td><?= $visi['visi']; ?></td>
  				<?php endforeach; ?>
                <td><ol type="1">
               		<?php
                        foreach ($data['misi'] as $misi) : ?>
                        	<li><?= $misi['misi']; ?></li>
  					<?php endforeach; ?>


                    </ol>
                    
                    
                    
                    </p></td>
				</tr>
                
            </table>
					

	</section>
	