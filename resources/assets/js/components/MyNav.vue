<template>
	<div>
		<nav class="nav">
			<div class="nav-left">
				<a class="nav-item">
					Dashboard
				</a>
			</div>

			<span class="nav-toggle">
			</span>
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