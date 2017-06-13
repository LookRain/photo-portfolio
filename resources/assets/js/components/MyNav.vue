<template>
	<div>
		<nav class="nav">
			<div class="nav-left">
				<a class="nav-item">
					Dashboard
				</a>
			</div>



			<!-- This "nav-toggle" hamburger menu is only visible on mobile -->
			<!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
			<span class="nav-toggle">

			</span>

			<!-- This "nav-menu" is hidden on mobile -->
			<!-- Add the modifier "is-active" to display it on mobile -->
			<div class="nav-right nav-menu is-active">
				<a class="nav-item" href="/">
					Home
				</a>
				<a class="nav-item" href="/out">
					Logout
				</a>


			</div>
		</nav>
	</div>
</template>
<script>
	export default {
		name: 'MyNav',
		data () {
			return {
			}
		},
		mounted() {
			console.log('nav mounted.')
		}
	}
</script>
<style lang="css" scoped>
</style>