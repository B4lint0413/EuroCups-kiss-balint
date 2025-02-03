<template>
    <table>
        <thead>
            <tr>
                <th>Helyezés</th>
                <th>Ország</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="team of teams">
                <td>{{team.pivot.rank}}</td>
                <td>{{team.country}}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default{
    props: ["teams"]
}
</script>