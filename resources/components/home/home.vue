<template>
    <h1>[{{ name }}]님 반갑습니다.</h1>
    <button v-on:click="back()">뒤로가기</button>
    <table>
        <caption>2023년 5월</caption>
        <thead>
        <tr>
            <th>일</th>
            <th>월</th>
            <th>화</th>
            <th>수</th>
            <th>목</th>
            <th>금</th>
            <th>토</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
        </tr>
        <tr>
            <td>12</td>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
        </tr>
        <tr>
            <td>19</td>
            <td>20</td>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
        </tr>
        <tr>
            <td>26</td>
            <td>27</td>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <div>
        <button v-on:click="partIn()">출석하기</button>
        <span>{{ partYN }}</span>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name: 'test',
            partYN: '출석 안됨'
        }
    },
    methods: {
        back(){
            window.location.href = "/";
        },
        partIn(){
            this.partYN = '출석 성공'
        }
    }
}
</script>

<style scoped>
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
}
th {
    background-color: #f2f2f2;
}
</style>
