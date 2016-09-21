<div class="modal fade" id="FormInquiry" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<img src="/images/logo.png" alt="Mr. Franchise logo" title="Mr. Franchise logo" class="img-responsive" />
			</div>
			<div class="modal-body">
				<div class="Row">
					<div class="Column-4 Inquiry-bg"></div>
					<div class="Column-8">
						<form method="POST">
							{{ csrf_field() }}
							<p>
								Now that you have familiarized yourself with Mr. Franchise Franchising and believe a Mr. Franchise is right for you please complete our online inquiry form and one of our representative will contact you shortly.
							</p>
							<hr />
                            <div class="form-group">
                            	<label for="name">Name</label>
                            	<input type="text" id="name" name="name" placeholder="Name" class="form-control" required>
                            </div>
                       		<div class="form-group">
                       			<label for="email">eMail</label>
                            	<input type="email" id="email" name="email" placeholder="eMail" class="form-control" required>
                            </div>	
                       		<div class="form-group">
                       			<label for="phone">Phone</label>
                            	<input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" required>
                            </div>	
                       		<div class="form-group">
                       			<label for="netWorth">Net Worth</label>
								<select class="form-control" name="netWorth" id="netWorth">
				                	<option value="" selected="selected">Select</option>
									<option value="$250000-500000">$250,000 - 500,000</option>
									<option value="$500000-1000000">$500,000 - 1,000,000</option>
									<option value="$1000000-2000000">$1,000,000 - 2,000,000</option>
									<option value="$2000000-3000000">$2,000,000 - 3,000,000</option>
									<option value="$3000000-4000000">$3,000,000 - 4,000,000</option>
									<option value="$4000000">$4,000,000+</option>
				                </select>                            	
                            </div>
                       		<div class="form-group">
                       			<label for="cashLiquidity">Cash Liquidity</label>
								<select class="form-control" name="cashLiquidity" id="cashLiquidity">
									<option value="" selected="selected">Select</option>
									<option value="$0-250000">$0 - 250,000</option>
									<option value="$250000-500000">$250,000 - 500,000</option>
									<option value="$500000-750000">$500,000 - 750,000</option>
									<option value="$750000-1000000">$750,000 - 1,000,000</option>
									<option value="$1000000+">$1,000,000+</option>
								</select>                            	
                            </div>
                       		<div class="form-group">
                       			<label for="whenToInvest">When will you be able to invest?</label>
								<select class="form-control" name="whenToInvest" id="whenToInvest">
									<option value="" selected="selected">Select</option>
									<option value="0-3months">0-3 Mo.</option>
									<option value="3-6months">3-6 Mo.</option>
									<option value="6-9months">6-9 Mo.</option>
									<option value="9-12months">9-12 Mo.</option>
									<option value="12months +">12 Mo.+</option>
								</select>                            	
                            </div> 
						</form>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-lg btn-default" data-dismiss="modal">Close</button>
				<input type="submit" name="submit" class="btn btn-lg btn-primary" value="Submit Inquiry" />
			</div>
		</div>
	</div>
</div>